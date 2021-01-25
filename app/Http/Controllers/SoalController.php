<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\Soal;
use Validator;
use Illuminate\Support\Facades\Storage;

class SoalController extends Controller
{
    public function store(Request $request)
    {
        $mapel = Mapel::find($request->id_mapel);
        $this->validate($request,[
            'soal' =>'required|mimes:pdf,docx,pptx',
            'judul' =>'required'
        ]);

            $file =  $request->file('soal');
            $extension = $file->getClientOriginalExtension();
            $filename = $request->judul.'_'.$mapel->nama.'_'.date("Y-m-dTHis").".".$extension;
            $path = $file->storeAs('private/soal',$filename);
            $soal = new Soal;
            $soal->file = $filename;
            $soal->judul = $request->judul;
            $soal->tgl_buat = date("Ymd");
            $soal->id_mapel = $request->id_mapel;
            $soal->save();
        
        return back()->with('success','Upload Soal Berhasil');
        // return $request;
    }
    public function download(Request $request){
        return Storage::download('private/soal/'.$request->filename,$request->judul);
        // return response()->download(public_path('private/soal/'.$filename));
    }
}
