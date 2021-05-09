<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\Jadwal;
use App\Models\Soal;

class MapelController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|unique:mapel',
            'tingkat' =>'required'
        ]);
        $mapel = new Mapel();
        $mapel->nama = $request->nama;
        $mapel->tingkat = $request->tingkat;
        $mapel->save();
        return back()->with('success',"Data mapel berhasil disimpan");
    }
    public function edit(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|unique:cabang'.($request->id ? ",id,$request->id" : ''),
            'tingkat' => 'required'
        ]);
        $mapel = Mapel::find($request->id);
        $mapel->nama = $request->nama;
        $mapel->tingkat = $request->tingkat;
        $mapel->save();
        return back()->with('success',"Data mapel berhasil diubah");
    }
    public function delete($id)
    {
        $mapel = Mapel::find($id);
        $jadwal = Jadwal::where('id_mapel','=',$id);
        $jadwal->delete();
        $soal = Soal::where('id_mapel','=',$id);
        $soal->delete();
        $mapel->delete();
        
        return back()->with('success','Mapel berhasil dihapus');
    }
}
