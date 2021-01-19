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
