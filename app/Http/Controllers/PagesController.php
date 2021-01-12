<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('landing');
    }

    public function reguler()
    {
        return view('homepage.reguler');
    }

    public function platinum()
    {
        return view('homepage.platinum');
    }

    public function tanyapr()
    {
        return view('homepage.tanyapr');
    }

    public function profil()
    {
        return view('homepage.profil');
    }

    public function lokasi()
    {
        return view('homepage.lokasi');
    }

    public function keunggulan()
    {
        return view('homepage.keunggulan');
    }

    public function testimoni()
    {
        return view('homepage.testimoni');
    }

    public function prestasi()
    {
        return view('homepage.prestasi');
    }
}
