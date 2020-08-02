<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/student', function () {
    return view('student-dashboard/header');
});

Route::get('/change', function () {
    return view('student-dashboard/change-password');
});

Route::get('/admin', function () {
    return view('admin-dashboard/admin');
});

Route::get('/new-reg', function () {
    return view('admin-dashboard/new-registration');
});


