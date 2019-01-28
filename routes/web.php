<?php

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
    return view('front.welcome');
});

Route::get('/weare', function () {
    return view('front.pages.weare.index');
});

Route::get('/wow', function () {
    return view('front.pages.wow.index');
});

Route::get('/wedo', function () {
    return view('front.pages.wedo.index');
});

Route::get('/wedone', function () {
    return view('front.pages.wedone.index');
});

Route::get('/contacts', function () {
    return view('front.pages.contacts.index');
});
