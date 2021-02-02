<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\Soal;
use Auth;
use Hash;

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

    public function editProfile()
    {
        return view('guru.editProfile');
    }

    public function viewSoal()
    {
        return view('guru.viewSoal');
    }

    public function updateProfile(Request $request){
        $guru = AUTH::user();
        $this->validate($request,[
            'password' => 'required|min:8',
            'repassword' => 'required_with:password|same:password||min:8'
        ]);
        $guru->password = Hash::make($request->password);
        $guru->save();
        return back()->with('success',"Password berhasil diubah");
    }

    public function addSoal(){
        $mapel = Mapel::all();
        return view('guru.addSoal',['mapel'=>$mapel],compact('mapel'));
    }
}
