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
//     return view('home');
// });
//Auth::routes();

//Route HomeController
Route::get('/', 'HomeController@index')->name('acceuil');

//Route AboutController
Route::get('/about', 'AboutController@index')->name('a propos');

//Route GallerieController
Route::get('/gallerie','GallerieController@index')->name('gallerie');

//Route MusicController
Route::get('/music', 'MusicController@index')->name('music');

//Route DanseController
Route::get('/danse', 'DanseController@index')->name('danse');

//Route CcaController
Route::get('/cca', 'CcaController@index')->name('cca');
