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
Route::get('/infos_pratiques', 'AboutController@infos_pratiques')->name('infos_pratiques');
Route::get('/inscription', 'InscriptionController@index')->name('inscription');
Route::get('/sendingMail', 'InscriptionController@sendingMail');

//requete pour l'enreggistrement des utilisateurs
Route::post('/inscription/submit','InscriptionController@submit');
Route::get('/saisons', 'AboutController@saisons')->name('saisons');
Route::get('/calendrier_annuel', 'AboutController@calendrier_annuel')->name('calendrier_annuel');
Route::get('/location_instrus', 'AboutController@location_instrus')->name('location_instrus');
Route::get('/actus', 'AboutController@actus')->name('actus');

//Route GallerieController
Route::get('/gallerie','GallerieController@index')->name('gallerie');

//Route MusicController
Route::get('/eveil_musical', 'MusicController@eveil_musical')->name('eveil_musical');
Route::get('/decouverte_et_initiation', 'MusicController@decouverte_et_initiation')->name('decouverte_et_initiation');
Route::get('/parcours_des_8ans', 'MusicController@parcours_des_8ans')->name('parcours_des_8ans');
Route::get('/instruments', 'MusicController@instruments')->name('instruments');
Route::get('/pratique_ensemble', 'MusicController@pratique_ensemble')->name('pratique_ensemble');

//Route DanseController
Route::get('/danse_classique', 'DanseController@danse_classique')->name('danse_classique');
Route::get('/danse_contemporaine', 'DanseController@danse_contemporaine')->name('danse_contemporaine');
Route::get('/danse_jazz', 'DanseController@danse_jazz')->name('danse_jazz');
Route::get('/danse_orientale', 'DanseController@danse_orientale')->name('danse_orientale');
Route::get('/danse_hip_hop', 'DanseController@danse_hip_hop')->name('danse_hip_hop');
Route::get('/barre_au_sol', 'DanseController@barre_au_sol')->name('barre_au_sol');

//Route CcaController
Route::get('/cca', 'CcaController@index')->name('cca');
Route::get('/professeurs', 'CcaController@professeurs')->name('professeurs');
Route::get('/partenaires', 'CcaController@partenaires')->name('partenaires');
Route::get('/evenements', 'CcaController@evenements')->name('evenements');
