<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use Validator;
use File;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'file' =>'required|mimes:pdf',
        ]);
        $file =  $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $filename = $request->filename.".".$extension;
        $path = $file->storeAs('private/laporan',$filename);
        if(is_null($request->id)){
            $laporan = new Laporan;
        }else{
            $laporan = Laporan::find($request->id);
        }
        
        $laporan->file = $filename;
        $laporan->id_murid = $request->id_murid;
        $laporan->tanggal = $request->tanggal;
        $laporan->save();
        return back()->with('success','Upload Soal Berhasil');
        // return $request;
    }
    public function download(Request $request){
        return Storage::download('private/laporan/'.$request->filename.'.pdf',$request->filename.'.pdf');
        // return response()->download(public_path('private/soal/'.$filename));
    }
}
