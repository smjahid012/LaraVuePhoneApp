<?php

 Route::get('/', function () {
    return view('vuephonebook');
 });

Route::get('/phonebook/{name}', function () {
    return redirect('/vuephonebook');
})->where('name','[A-Za-z]+');

Route::resource('phonebook','PhonebookController');
Route::post('getData','PhonebookController@getData');