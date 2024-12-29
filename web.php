<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/appointment', function () {
    return view('appointment');
})->name('appointment');

Route::get('/call-to-action', function(){
    return view('call-to-action');
})->name('call-to-action');

Route::get('/classes', function () {
    return view('classes');
})->name('classes');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/facility', function () {
    return view('facility');
})->name('facility');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');

Route::get('/pages', function () {
    return view('pages');
})->name('pages');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/privacypolicy', function () {
    return view('privacypolicy');
})->name('privacypolicy');

Route::get('/t&c', function () {
    return view('t&c');
})->name('t&c');

Route::get('/cookies', function () {
    return view('cookies');
})->name('cookies');

Route::get('/help', function () {
    return view('help');
})->name('help');

Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');

Route::fallback(function(){
    return view('404');
});

