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

// Route::get('/', function () {
//     return view('welcome');
// });
// route::get('about', function(){
//     return view('about');
// });
// route::get('index', function(){
//     return view('index');
// });

// route::get('home', function(){
//     return view('home');
// });

// Route::get('/posts', '\App\Http\Controllers\PostController@index');
// Route::get('/student', '\App\Http\Controllers\StudentController@index');

// Route::resource('/Test','\App\Http\Controllers\TestController',['only'=>['index']]);

// Route::get('/pages','\App\Http\Controllers\PagesController@contact');
// Route::get('/pages/display/{view}','\App\Http\Controllers\PagesController@display');
Route::get('/pages','\App\Http\Controllers\PagesController@employees');