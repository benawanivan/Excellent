<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\Soal;
use App\Models\Murid;
use Auth;
use Hash;

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
    public function viewProfile()
    {
        return view('murid.viewProfile');
       
    }
    public function viewSoal()
    {
        $keyword = NULL;
        $soal = Soal::paginate(12);
        return view('murid.viewSoal',['soal'=>$soal,'keyword'=>$keyword],compact('soal'));
    }

    public function searchSoal(Request $request){
        $soal = Soal::where('judul','like',"%".$request->keyword."%")->paginate(12);
        return view('murid.viewSoal',['soal'=>$soal,'keyword'=>$request->keyword],compact('soal'));
    }
    public function updateProfile(Request $request){
        $murid = AUTH::user();
        $this->validate($request,[
            'password' => 'required|min:8',
            'repassword' => 'required_with:password|same:password||min:8'
        ]);
        $murid->password = Hash::make($request->password);
        $murid->save();
        return back()->with('success',"Password berhasil diubah");
    }

    public function addSoal(){
        $mapel = Mapel::all();
        return view('murid.addSoal',['mapel'=>$mapel],compact('mapel'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'password' => 'required|min:8',
            'nama' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'username' => 'required|unique:murid',
            'id_cabang' => 'required',
            'status' =>'required', 
        ]);
        
        $murid = new Murid();
        $murid->nama = $request->nama;
        $murid->username = $request->username;
        $murid->id_cabang = $request->id_cabang;
        $murid->kelas = $request->kelas;
        $murid->asal_sekolah = $request->asal_sekolah;
        $murid->status = $request->status;
        $murid->password = Hash::make($request->password);
        $murid->save();
        return back()->with('success',"Data siswa berhasil disimpan");
    }
    public function edit(Request $request)
    {
        $this->validate($request,[
            'password' => 'required|min:8',
            'nama' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'username' => 'required|unique:murid'.($request->id ? ",id,$request->id" : ''),
            'id_cabang' => 'required',
            
        ]);
        $murid = Murid::find($request->id);
        $murid->nama = $request->nama;
        $murid->username = $request->username;
        $murid->id_cabang = $request->id_cabang;
        $murid->kelas = $request->kelas;
        $murid->asal_sekolah = $request->asal_sekolah;
        $murid->password = Hash::make($request->password);
        $murid->save();
        return back()->with('success',"Data siswa berhasil diubah");
    }
    public function delete($id)
    {
        $murid = Murid::find($id);
        $murid->delete();
        
        return back()->with('success','murid berhasil dihapus');
    }
}
