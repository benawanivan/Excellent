<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrtuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function viewJadwal()
    {
        return view('ortu.viewJadwal');
       
    }

    public function editProfile()
    {
        return view('ortu.editProfile');
    }
}
