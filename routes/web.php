<?php

declare(strict_types=1);

Auth::routes();

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::view('about', 'about.index')->name('about.index');
Route::view('about/faq', 'about.faq')->name('about.faq');
Route::view('about/privacy', 'about.privacy')->name('about.privacy');
Route::view('about/tos', 'about.tos')->name('about.tos');

Route::view('contact', 'contact.index')->name('contact.index');

Route::resource('events', 'EventsController')
    ->only(['index', 'show', 'create', 'store', 'edit', 'update', 'destroy'])
    ->names([
        'index' => 'events.index',
        'show' => 'events.show',
        'create' => 'events.create',
        'store' => 'events.store',
        'edit' => 'events.edit',
        'update' => 'events.update',
        'destroy' => 'events.destroy',
    ]);

Route::get('languages', 'LanguagesController@index')->name('languages.index');
Route::get('locations', 'LocationsController@index')->name('locations.index');
Route::get('map', 'MapsController@index')->name('maps.index');
