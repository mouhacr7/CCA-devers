<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Musique;
use App\Danse;

class AboutController extends Controller
{
    //
    public function index()
    {
        return view('pages.about');
    }
    public function infos_pratiques()
    {
        return view('pages.infos_pratiques');
    }
    public function inscription()
    /*{
        $musique=Musique::get();
        $danse=Danse::get();
        return view('pages.inscription',compact('musique','danse'));
    }*/
    public function saisons()
    {
        return view('pages.saisons');
    }
    public function calendrier_annuel()
    {
        return view('pages.calendrier_annuel');
    }
    public function location_instrus()
    {
        return view('pages.location_instrus');
    }
    public function actus()
    {
        return view('pages.actus');
    }

}
