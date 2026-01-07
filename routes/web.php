<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/conditions', function () {
    return view('conditions');
});

Route::get('/policy', function () {
    return view('policy');
});

Route::get('/blogDetails', function () {
    return view('blogDetails');
});

Route::get('/marriage', function () {
    return view('marriage');
});

Route::get('/fatwa', function () {
    return view('fatwa');
});

Route::get('/course', function () {
    return view('course');
});
