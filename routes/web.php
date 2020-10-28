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

//level admin bisa akses semua halaman
Route::group(['middleware' => ['auth','CekLevel:admin']], function (){
    //route beranda dengan  controller
    Route::get('/beranda','BerandaController@index');

    Route::get('/halaman-satu','BerandaController@halamansatu')->name('halaman-satu');
    Route::get('/halaman-dua','BerandaController@halamandua')->name('halaman-dua');
});


//level user hanya bisa akses beranda dan halaman satu
Route::group(['middleware' => ['auth','CekLevel:admin,user']], function (){
    //route beranda dengan  controller
    Route::get('/beranda','BerandaController@index');

    Route::get('/halaman-satu','BerandaController@halamansatu')->name('halaman-satu');
   
});



//route login
Route::get('/login', function () {
    return view('Pengguna.Login');
})->name('login');

//route login k belum jalan beranda
Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');

//route logout
Route::get('/logout', 'LoginController@logout')->name('logout');
