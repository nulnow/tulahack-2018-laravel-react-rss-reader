<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;

//Route::view('/', 'welcome');




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
        $command = $request->input('command'); // Команда текстом
        $data = $request->input('data'); // JSON массив

        switch ($command) {

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