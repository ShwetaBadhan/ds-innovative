<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.index');
})->name('home');

Route::get('/about-us', function () {
    return view('frontend.pages.about-us');
})->name('about-us');

Route::get('/our-services', function () {
    return view('frontend.pages.our-services');
})->name('our-services');

Route::get('/service-details', function () {
    return view('frontend.pages.service-details');
})->name('service-details');

Route::get('/our-projects', function () {
    return view('frontend.pages.our-projects');
})->name('our-projects');

Route::get('/our-blogs', function () {
    return view('frontend.pages.our-blogs');
})->name('our-blogs');

Route::get('/blog-details', function () {
    return view('frontend.pages.blog-details');
})->name('blog-details');

Route::get('/contact-us', function () {
    return view('frontend.pages.contact-us');
})->name('contact-us');