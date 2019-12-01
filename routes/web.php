<?php

// indexページ
Route::get('/', function () {
    return view('index');
});

// aboutページ
Route::get('/about', 'AboutController@about');
Route::get('/about/staff', 'AboutController@staff');
Route::get('/about/group', 'AboutController@group');
// Route::get('/about/access', 'AboutController@access'); トップページにあるため不要？

// templeページ
Route::get('/temple', 'TempleController@temple');
Route::get('/temple/schedule', 'TempleController@schedule');
Route::get('/temple/justice', 'TempleController@justice');
Route::get('/temple/aborted', 'TempleController@aborted');
Route::get('/temple/perpetuity', 'TempleController@perpetuity');
Route::get('/temple/pet', 'TempleController@pet');
Route::get('/temple/sutra', 'TempleController@sutra');
Route::get('/temple/amulet', 'TempleController@amulet');

// homeページ
Route::get('/home', 'HomeController@home');
Route::get('/home/familyhome', 'HomeController@familyhome');
Route::get('/home/mission', 'HomeController@mission');
Route::get('/home/q&a', 'HomeController@q&a');

// eventページ
Route::get('/event', 'EventController@event');
Route::get('/event/consultation', 'EventController@consultation');
Route::get('/event/whereabouts', 'EventController@whereabouts');
Route::get('/event/marriage', 'EventController@marriage');
Route::get('/event/lecture', 'EventController@lecture');

// volunteerページ
Route::get('/volunteer', 'VolunteerController@volunteer');

// donationページ
Route::get('/donation', 'DonationController@donation');

// newsページ
Route::get('/news', 'NewsController@index');

// contactページ
Route::get('/contact', 'ContactController@contact');
