<?php

declare(strict_types=1);

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', static function (Request $request) {
    return $request->user();
});
