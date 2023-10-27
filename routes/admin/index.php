<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::view('/', 'admin.pages.dashboard.analysis')->name('dashboard');
Route::view('/forms', 'admin.pages.forms')->name('forms');
Route::view('/buttons', 'admin.pages.buttons')->name('buttons');
Route::view('/tables', 'admin.pages.tables')->name('tables');
Route::view('/settings', 'admin.pages.settings')->name('settings');

Route::view('auth/login', 'admin.pages.auth.login')->name('auth.login');
