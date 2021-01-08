<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function viewJadwal()
    {
        return view('guru.viewJadwal');
       
    }
}
