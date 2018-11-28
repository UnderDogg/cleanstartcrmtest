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
return view('home');
});


Route::get('/admincp/', function () {
return view('admincp.dashboard');
});



Route::get('/blank/', function () {
return view('pages.blank');
});
Route::get('/charts/', function () {
return view('pages.charts');
});
Route::get('/colors/', function () {
return view('pages.colors');
});
Route::get('/index/', function () {
return view('pages.index');
});
Route::get('/typography/', function () {
return view('pages.typography');
});
Route::get('/widgets/', function () {
return view('pages.widgets');
});
