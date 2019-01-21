<?php

declare(strict_types=1);

Auth::routes();

Route::get('login/github', 'Auth\SocialGitHubController@redirectToProvider')->name('login.github');
Route::get('login/github/callback', 'Auth\SocialGitHubController@handleProviderCallback')->name(
    'login.github.callback'
);

Route::get('/', 'WelcomeController@index')->name('welcome.index');

Route::view('about', 'about.index')->name('about.index');
Route::view('about/faq', 'about.faq')->name('about.faq');
Route::view('about/privacy', 'about.privacy')->name('about.privacy');
Route::view('about/tos', 'about.tos')->name('about.tos');

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

Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');

Route::get('languages', 'LanguagesController@index')->name('languages.index');
Route::get('locations', 'LocationsController@index')->name('locations.index');
Route::get('map', 'MapsController@index')->name('maps.index');
