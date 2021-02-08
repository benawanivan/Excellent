<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cabang;

class CabangController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|unique:cabang',
        ]);
        $cabang = new Cabang();
        $cabang->nama = $request->nama;
        $cabang->save();
        return back()->with('success',"Data cabang berhasil disimpan");
    }
    public function edit(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|unique:cabang'.($request->id ? ",id,$request->id" : ''),
        ]);
        $cabang = Cabang::find($request->id);
        $cabang->nama = $request->nama;
        $cabang->save();
        return back()->with('success',"Data cabang berhasil diubah");
    }
    public function delete($id)
    {
        $cabang = cabang::find($id);
        $cabang->delete();
        
        return back()->with('success','Cabang berhasil dihapus');
    }
}
