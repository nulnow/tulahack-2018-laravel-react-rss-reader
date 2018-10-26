<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Link;


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

function isValidRssLlink($link) {
    try {
        Feed::loadRss($link);
    } catch (Exception $e) {
        return false;
    }
    return true;
}

function userHasLink($user_id, $link_id) {
    $linksIds = DB::select(
        "SELECT * FROM users_links WHERE (user_id = ? and link_id = ?)",
        [
            $user_id,
            $link_id
        ]
    );
    if (count($linksIds) > 0) {
        return true;
    }
    return false;
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
                return getNewsByLinkId($id);
                break;

            case "add_link":
                $link = $data['link'];
                $user_id = $user->id;

                if (!isValidRssLlink($link)) {
                    return ['status'=>'error'];
                }

                try {
                    $isLinkExist = DB::select("select * from links where url = ?", [$link])[0];
                } catch (Exception $e) {
                    $isLinkExist = false;
                }


                if ($isLinkExist) {

                    $isUserAlreadyHasTheLink = DB::select(
                        "select * from users_links where (user_id = ? and link_id = ?)", [$user_id, $isLinkExist->id]
                    )[0];

                    if (!$isUserAlreadyHasTheLink) {
                        DB::insert('insert into users_links (`user_id`, `link_id`) values (?, ?)', [$user_id, $isLinkExist->id]);
                    }

                    return ['status'=>'ok'];
                } else {
                    try {
                        DB::insert('insert into links (`url`, `name`) values (?, ?)', [$link, 'Dayle']);
                        $isLinkExist = DB::select("select * from links where url = ?", [$link])[0];
                        DB::insert('insert into users_links (`user_id`, `link_id`) values (?, ?)', [$user_id, $isLinkExist->id]);
                    } catch (Exception $e) {
                        return ['status'=>'ok'];
                    }
                }

                return ['status'=>'ok'];
                break;

            case "delete_link_by_id":
                $id = $data['id'];
                $linksIds = DB::select(
                    "SELECT * FROM users_links WHERE (user_id = ? and link_id = ?)",
                    [
                        $modelUser->id,
                        $id
                    ]
                );
                if (count($linksIds) > 0) {
                    DB::delete(
                        "delete from users_links WHERE (user_id = ? and link_id = ?)",
                        [
                            $modelUser->id,
                            $id
                        ]
                    );
                }
                return ['status'=>'ok'];
                break;

            case "get_news_by_user_link":
                $link_id = $data['link_id'];

                if (userHasLink($user->id, $link_id)) {
                    return getNewsByLinkId($link_id);
                }
                return ['status'=>'error'];

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