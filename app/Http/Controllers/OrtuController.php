<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Laporan;
use Auth;
use Hash;

class OrtuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function viewLaporan()
    {
        $keyword = NULL;
        $laporan = Laporan::paginate(12);
        return view('ortu.viewLaporan',['laporan'=>$laporan,'keyword'=>$keyword],compact('laporan'));
       
    }
    public function viewJadwal()
    {
        return view('ortu.viewJadwal');
       
    }

    public function editProfile()
    {
        return view('ortu.editProfile');
    }

    public function updateProfile(Request $request){
        $ortu = AUTH::user();
        $this->validate($request,[
            'password' => 'required|min:8',
            'repassword' => 'required_with:password|same:password||min:8'
        ]);
        $ortu->password = Hash::make($request->password);
        $ortu->save();
        return back()->with('success',"Password berhasil diubah");
    }
}
