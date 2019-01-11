<?php

declare(strict_types=1);

Route::get('/', 'WelcomeController@index');

Route::get('events', 'EventsController@index')->name('events.index');
Route::get('events/{id}', 'EventsController@show')->name('events.show');
