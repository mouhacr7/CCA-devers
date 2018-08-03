<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicController extends Controller
{
    //
  //  Route::get('/eveil_musical', 'MusicController@eveil_musical')->name('eveil_musical');
// Route::get('/decouverte_et_initiation', 'MusicController@decouverte_et_initiation')->name('decouverte_et_initiation');
// Route::get('/parcours_des_8ans', 'MusicController@parcours_des_8ans')->name('parcours_des_8ans');
// Route::get('/instruments', 'MusicController@instruments')->name('instruments');
// Route::get('/pratique_ensemble', 'MusicController@pratique_ensemble')->name('pratique_ensemble');

    public function eveil_musical()
    {
        return view('pages.eveil_musical');
    }
    public function decouverte_et_initiation()
    {
        return view('pages.decouverte_et_initiation');
    }
    public function parcours_des_8ans()
    {
        return view('pages.parcours_des_8ans');
    }
    public function instruments()
    {
        return view('pages.instruments');
    }
    public function pratique_ensemble()
    {
        return view('pages.pratique_ensemble');
    }
 
}
