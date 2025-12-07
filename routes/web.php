<?php

use App\Http\Controllers\AgencyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/services', fn () => view('pages.services'))->name('services');
Route::get('/portfolio', fn () => view('pages.portfolio'))->name('portfolio');
Route::get('/about', fn () => view('pages.about'))->name('about');
Route::get('/team', fn () => view('pages.team'))->name('team');
Route::get('/contact', fn () => view('pages.contact'))->name('contact');
