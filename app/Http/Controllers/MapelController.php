<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;

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
        $mapel->delete();
        
        return back()->with('success','Mapel berhasil dihapus');
    }
}
