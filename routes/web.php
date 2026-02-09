<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/das-buero', 'das-buero');
Route::view('/leistungen', 'leistungen');
Route::view('/leistungen/bauschaeden', 'leistungen.bauschaeden');
Route::view('/leistungen/bauherrenunterstuetzung', 'leistungen.bauherrenunterstuetzung');
Route::view('/leistungen/immobilien-an-verkauf', 'leistungen.immobilien-an-verkauf');
Route::view('/gutachten', 'gutachten');
Route::view('/holzrahmenbau', 'holzrahmenbau');
Route::view('/kontakt', 'kontakt');
Route::view('/datenschutz', 'datenschutz');
Route::view('/impressum', 'impressum');
