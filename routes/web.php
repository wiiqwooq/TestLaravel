<?php

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
Route::get('/6014120021', function () {
    return view('6014120021');
});
Route::get('/6014110025',function() {
    return view('6014110025');
});
Route::get('/6014110010',function() {
    return view('6014110010');
});
Route::get('/6014110022',function(){
    return view('6014110022');
});