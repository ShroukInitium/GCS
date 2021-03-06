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
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/content', function () {
    return view('content');
});
Route::get('/getLinks', function () {
    // compact here
     return view('content');  
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/coursesview', function () {
    return view('coursesview');
});
