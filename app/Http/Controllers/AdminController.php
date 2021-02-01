<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\Soal;
use App\Models\Murid;
use App\Models\Cabang;
use Auth;
use Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function viewDashboard()
    {
        return view('admin.viewDashboard');
       
    }
    public function viewSoal()
    {
        $keyword = NULL;
        $soal = Soal::paginate(12);
        return view('admin.viewSoal',['soal'=>$soal,'keyword'=>$keyword],compact('soal'));
    }

    public function searchSoal(Request $request){
        $soal = Soal::where('judul','like',"%".$request->keyword."%")->paginate(12);
        return view('admin.viewSoal',['soal'=>$soal,'keyword'=>$request->keyword],compact('soal'));
    }
    public function addSoal(){
        $mapel = Mapel::all();
        return view('admin.addSoal',['mapel'=>$mapel],compact('mapel'));
    }

    public function viewDataMurid()
    {
        $keyword = NULL;
        $murid = Murid::all();
        return view('admin.viewDataMurid',['murid'=>$murid,'keyword'=>$keyword],compact('murid'));
    }
    public function addMurid(){
        $cabang = Cabang::all();
        return view('admin.addMurid',['cabang'=>$cabang],compact('cabang'));
    }
    public function editMurid(Request $request){
        $cabang = Cabang::all();
        $murid = Murid::find($request->id);
        return view('admin.editMurid',['cabang'=>$cabang,'murid'=>$murid],compact('murid'));
    }
}

