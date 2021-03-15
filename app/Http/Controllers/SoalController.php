<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\Soal;
use App\Models\Jadwal;
use Validator;
use File;
use Illuminate\Support\Facades\Storage;

class SoalController extends Controller
{
    public function store(Request $request)
    {
        $mapel = Mapel::find($request->id_mapel);
        $this->validate($request,[
            'soal' =>'required|mimes:pdf,doc,docx,pptx',
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
    public function backupSoal(){
        $zip_file = 'databaseSoal_'.date("d-m-Y").'.zip';
        $zip = new \ZipArchive();
        $zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

        $path = storage_path('app/private/soal');
        $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path));
        foreach ($files as $name => $file)
        {
            // We're skipping all subfolders
            if (!$file->isDir()) {
                $filePath     = $file->getRealPath();

                // extracting filename with substr/strlen
                $relativePath = 'soal/' . substr($filePath, strlen($path) + 1);

                $zip->addFile($filePath, $relativePath);
            }
        }
        $zip->close();
        return response()->download($zip_file);
    }
    public function deleteSoal(Request $request){
        $soal = Soal::find($request->id);
        $jadwal = Jadwal::where('id_soal','=',$soal->id)->first();
        if(!is_null($jadwal)){
            $jadwal->id_soal = NULL;
            $jadwal->save();
        }
        Storage::delete('private/soal/'.$soal->file);
        $soal->delete();
        
        return back()->with('success','Soal berhasil dihapus');
    }
    public function deleteAllSoal(Request $request){
        $soal = Soal::all();
        foreach ($soal as $s) {
            $jadwal = Jadwal::where('id_soal','=',$s->id)->first();
            if(!is_null($jadwal)){
                $jadwal->id_soal = NULL;
                $jadwal->save();
            }

        }
        foreach ($soal as $s) {
            $s->delete();

        }
        Storage::deleteDirectory('private/soal');
        return back()->with('success','Semua soal berhasil dihapus');
    }
}
