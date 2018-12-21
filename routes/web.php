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

Route::get('/new', function () {
    return view('front.pages.new.index');
});

Route::get('/workshops', function () {
    return view('front.pages.workshops.index');
});

Route::get('/workshops-detail', function () {
    return view('front.pages.workshops.show');
});

Route::get('/shop', function () {
    return view('front.pages.shop.index');
});

Route::get('/shop-detail', function () {
    return view('front.pages.shop.show');
});

Route::get('/journal', function () {
    return view('front.pages.journal.index');
});

Route::get('/journal-detail', function () {
    return view('front.pages.journal.show');
});

Route::get('/abc', function () {
    return view('front.pages.abc.index');
});

Route::get('/abc-detail', function () {
    return view('front.pages.abc.show');
});

Route::get('/curated', function () {
    return view('front.pages.curated.index');
});

Route::get('/curated-detail', function () {
    return view('front.pages.curated.show');
});

Route::get('/about-mpl', function () {
    return view('front.pages.about-mpl.index');
});

Route::get('/about-personal', function () {
    return view('front.pages.about-personal.index');
});

Route::get('/contacts', function () {
    return view('front.pages.contacts.index');
});

Route::get('/why', function () {
    return view('front.pages.why.index');
});

Route::get('/press', function () {
    return view('front.pages.press.index');
});

Route::get('/footer-page', function () {
    return view('front.pages.footer-page.index');
});

Route::get('/landing-page', function () {
    return view('front.pages.landing.index');
});

Route::get('/footer-template', function () {
    return view('front.pages.footer-template.index');
});

// user area

Route::get('/login', function () {
    return view('front.pages.login.index');
});

Route::get('/register', function () {
    return view('front.pages.register.index');
});

Route::get('/personal-info', function () {
    return view('front.pages.personal-info.index');
});

Route::get('/vouchers', function () {
    return view('front.pages.vouchers.index');
});

Route::get('/myworkshops', function () {
    return view('front.pages.myworkshops.index');
});

Route::get('/myworkshops-detail', function () {
    return view('front.pages.myworkshops.show');
});
