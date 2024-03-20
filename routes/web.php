<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/events', 'EventController@index')->name('events.index');
Route::post('/events', 'EventController@store')->name('events.store');
Route::delete('/events/{event}', 'EventController@destroy')->name('events.destroy');
