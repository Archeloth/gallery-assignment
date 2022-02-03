<?php

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
    return view('index', ['images' => [
        [
            'src' => 'Oneway - 2880x1800.jpg',
            'title' => 'Oneway - 2880x1800.jpg'
        ],
        [
            'src' => 'Onicelandsringroad - 2880x1800.jpg',
            'title' => 'Onicelandsringroad - 2880x1800.jpg'
        ],
        [
            'src' => 'OoS84LL - Imgur.jpg',
            'title' => 'OoS84LL - Imgur.jpg'
        ],
        [
            'src' => 'Oq6KKKp - Imgur.jpg',
            'title' => 'Oq6KKKp - Imgur.jpg'
        ],
        [
            'src' => 'OQD2Y5z - Imgur.jpg',
            'title' => 'OQD2Y5z - Imgur.jpg'
        ],
        [
            'src' => 'OS X Yosemite Wallpaper - 2880x1800.jpg',
            'title' => 'OS X Yosemite Wallpaper - 2880x1800.jpg'
        ],
        [
            'src' => 'owdjKWk - Imgur.jpg',
            'title' => 'owdjKWk - Imgur.jpg'
        ],
        [
            'src' => 'P3150040 1920-1200.jpg',
            'title' => 'P3150040 1920-1200.jpg'
        ],
        [
            'src' => 'partlycloudyb1920x1200.jpg',
            'title' => 'partlycloudyb1920x1200.jpg'
        ],
    ]]);
});
