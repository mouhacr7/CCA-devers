<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DanseController extends Controller
{
    public function danse_contemporaine()
    {
        return view('pages.danse_contemporaine');
    }
    public function danse_jazz()
    {
        return view('pages.danse_jazz');
    }
    public function danse_orientale()
    {
        return view('pages.danse_orientale');
    }
    public function danse_hip_hop()
    {
        return view('pages.danse_hip_hop');
    }
    public function danse_classique()
    {
        return view('pages.danse_classique');
    }
    public function barre_au_sol()
    {
        return view('pages.barre_au_sol');
    }
    
}
