<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('install.sh', function () {
    $file = Cache::remember('install', 3600, function () {
        return file_get_contents('https://raw.githubusercontent.com/webserver-management/app/master/install/install.sh');
    });

    return response($file)
        ->header('Content-Type', 'text/plain');
});
