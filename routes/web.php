<?php

Route::view('/', 'welcome');

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');



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

//    Route::post('/add-rss-link', function() {
//        $link = $_POST['link'];
//        return Request::json(['status'=>'ok']);
//    });

});