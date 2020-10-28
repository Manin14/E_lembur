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


//route beranda tanpa controller
// Route::get('/beranda', function () {
//     return view('beranda');
// });

//route beranda dengan  controller
Route::get('/beranda','BerandaController@index');


//route login
Route::get('/login', function () {
    return view('Pengguna.Login');
});

//route login k belum jalan beranda
Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');

//route logout
Route::get('/logout', 'LoginController@logout')->name('logout');
