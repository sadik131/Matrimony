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

Route::get('/videoDetails', function () {
    return view('videoDetails');
});

Route::get('/loginFrom', function () {
    return view('loginFrom');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/logOut', function () {
    return view('logOut');
});

Route::get('/admin-dashboard', function () {
    return view('AdminDashboard');
});

Route::get('/withList', function () {
    return view('wishList');
});

Route::get('/disliked', function () {
    return view('Disliked');
});

Route::get('/orders', function () {
    return view('Orders');
});

Route::get('/support', function () {
    return view('Support');
});

Route::get('/setting', function () {
    return view('Setting');
});

Route::get('/delete', function () {
    return view('Delete');
});

Route::get('/payment', function () {
    return view('Payment');
});

Route::get('/connection', function () {
    return view('Connection');
});

Route::get('/bio-data-details', function () {
    return view('BioDataDetails');
});

Route::get('/bio-data', function () {
    return view('BioData');
});
