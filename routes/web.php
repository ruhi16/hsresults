<?php


Route::get('/', function () {


// $epoch = time();
// echo($epoch ."xxxxx");

// Convert epoch or Unix timestamp to date in PHP
// We can convert the epoch or timestamp to readable date format using PHP date() function. The function formats and return epoch or timestamp to human readable date and time.

// $epoch = time();
// echo(date("Y-m-d h:i:sa",$epoch));

// we can also convert epoch or Unix timestamp to formatted date using PHP DateTime class.

// $timestamp = 1550962800;
// $datetime = new DateTime("@$timestamp");
// echo $datetime->format('d-m-Y H:i:s');

// We can also display PHP date time from UTC time to specific timeozone.

// $timestamp = 1550962800;
// $datetime = new DateTime("@$timestamp");
// $datetimeFormat = $datetime->format('d-m-Y H:i:s');
// $timezoneFrom="UTC";
// $timezoneTo='Asia/Kolkata';
// $displayDate = new DateTime($datetimeFormat, new DateTimeZone($timezoneFrom));
// $displayDate->setTimezone(new DateTimeZone($timezoneTo));
// echo $displayDate->format('d-m-Y H:i:s');

// Convert date to epoch or unix timestamp in PHP
// We can convert human readable date to timestamp using PHP strtotime() function. The function convert English textual datetime into a Unix timestamp.

// $timestamp = strtotime("2019/02/24");
// echo $timestamp;
// $timestamp = strtotime("2019-02-24");
// echo $timestamp;


     return view('welcome');
//     $ses = App\Session::find(1);
//     dd($ses->sections);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
