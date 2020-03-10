<?php


Route::get('/', function () {
    // return view('welcome');
    $ses = App\Session::find(1);
    dd($ses->sections);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
