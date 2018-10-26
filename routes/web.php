<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Link;



//Route::view('/', 'welcome');
include_once 'Feed.php';

function getUserLinks($modelUser) {
    $linksIds = DB::select(
        "SELECT * FROM users_links WHERE user_id = ?",
        [$modelUser->id]
    );
    $links = [];
    foreach ($linksIds as $link) {
        $links[] = Link::findOrFail($link->link_id);
    }
    return $links;
}

function getNewsByLinkId($id) {
    $rss = Feed::loadRss(Link::findOrFail($id)->url);
    $elements = [];
    foreach ($rss->item as $item) {
        $elements[] = $item;
    }
    return $elements;
}


Route::get('/', function() {
    if (Auth::check()) {
        return view('app');
    } else {
        return view('landing');
    }
});

Auth::routes();

Route::middleware('auth', function() {

    Route::get('/get-all-feed', function() {

        $user = Auth::user();
        $id = Auth::id();

        $respArr = [
            // Тут можно запросить у бд все RSS ки с user_id == id
            // засунуть в json и вернуть приложению
        ];

        return Request::json($respArr);
    });

});


Route::post('/tools', function (Request $request) {

    if (Auth::check()) {

        $user = Auth::user();
        $modelUser = App\User::findOrFail($user->id);

        $command = $request->input('command'); // Команда текстом
        $data = $request->input('data'); // JSON массив

        switch ($command) {

            case "get_all_links":
                return Link::all();
                break;

            case  "get_links":
                $linksIds = DB::select(
                    "SELECT * FROM users_links WHERE user_id = ?",
                    [$modelUser->id]
                );
                $links = [];
                foreach ($linksIds as $link) {
                    $links[] = Link::findOrFail($link->link_id);
                }
                return $links;
                break;

            case "get_all_news":
                $links = getUserLinks($modelUser);
                $news = [];
                $elements = [];
                foreach ($links as $link) {

                    $rss = Feed::loadRss($link->url);

                    foreach ($rss->item as $item) {
                        $elements[] = $item;
                    }

                }
                return $elements;
                break;

            case "get_news_by_link_id":
                $id = $data['link_id'];
//                return $id;
                return getNewsByLinkId($id);
                break;

            case "get_user":
                return $modelUser;
                break;

            case "get_updates":
                return ['status'=>'ok', 'data'=> [/* достаем из бд ленту где user_id == $user->id */] ];
                break;

            case "update_name":
                $newName = $data['newName'];
                // Обновить поле name в таблице users где id == $user->id
                return ['status'=>'ok'];

            case "get_all-users":
                return DB::select('select * from users');
                break;

            default:
                return "unknown command";
        }

    } else {

        return "You are not logged in!";

    }
});