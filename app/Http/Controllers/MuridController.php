<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function viewJadwal()
    {
        return view('murid.viewJadwal');
       
    }
}
