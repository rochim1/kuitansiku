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

Route::get('login', function () {
    return ('welcome');
})->name('login');

Route::get('/about', function(){
    return view('menu.about');
});

Route::get('/team', function(){
    return view('menu.team');
});

Route::get('/form', function(){
    return view('layouts.form');
});

Route::get('/ServiceLogin', function(){
    return view('/ServiceLogin/index');
});
Route::post('/login', 'login@index');
//tidak digunakan
Route::get('menu/{option}', 'main_controller@footer'); //mendefinisikan route untuk mastering page dengan cara lain , yakni menggunakan include yang variable
//tidak digunakan