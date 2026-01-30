<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/das-buero', 'das-buero');
Route::view('/leistungen', 'leistungen');
Route::view('/gutachten', 'gutachten');
Route::view('/kontakt', 'kontakt');
Route::view('/datenschutz', 'datenschutz');
Route::view('/impressum', 'impressum');
