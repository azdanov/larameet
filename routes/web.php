<?php

declare(strict_types=1);

Auth::routes();

Route::get('/', 'WelcomeController@index');

Route::get('events', 'EventsController@index')->name('events.index');
Route::get('events/{id}', 'EventsController@show')->name('events.show');


Route::get('/home', 'HomeController@index')->name('home');
