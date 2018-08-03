<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CcaController extends Controller
{
    //
   // Route::get('/cca', 'CcaController@index')->name('cca');
// Route::get('/professeurs', 'CcaController@professeurs')->name('professeurs');
// Route::get('/partenaires', 'CcaController@partenaires')->name('partenaires');
// Route::get('/evenements', 'CcaController@evenements')->name('evenements');

    public function index()
    {
        return view('pages.cca');
    }
    public function professeurs()
    {
        return view('pages.professeurs');
    }
    public function partenaires()
    {
        return view('pages.partenaires');
    }
    public function evenements()
    {
        return view('pages.evenements');
    }
 
}
