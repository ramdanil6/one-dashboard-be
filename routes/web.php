<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dd(env('APP_ENV', 'kosong'));
    // return view('welcome');
});

Route::get('/artisan-command/{command}', function ($command) {
    return Artisan::call($command);
});
