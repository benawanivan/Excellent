<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\Soal;
use App\Models\Jadwal;
use Validator;
use File;
use Auth;
use Illuminate\Support\Facades\Storage;

class JadwalController extends Controller
{
    public function store(Request $request)
    {
        $mapel = Mapel::find($request->id_mapel);
        $this->validate($request, [
            'soal' => 'mimes:pdf,doc,docx,pptx',
            'materi' =>'required',
            'tanggal' =>'required|date',
            'sesi' =>'required',
        ]);
        if($request->id_guru==0){
            return back()->withErrors('Pengajar harus dipilih');
        }
        if($request->id_mapel==0){
            return back()->withErrors('Mata Pelajaran harus dipilih');
        }
        if($request->sesi==0){
            return back()->withErrors('Sesi harus dipilih');
        }
        $jadwal_ = Jadwal::where('id_murid',Auth::user()->id)
        ->where('sesi','=',$request->sesi)
        ->where('tanggal','=',$request->tanggal)
        ->get();
        if(!is_null($jadwal_->first())){
            return back()->withErrors('Terdapat jadwal pada tanggal dan sesi yang sama');
        }
        $soal = new Soal;
        $jadwal = new Jadwal();
        if (!is_null($request->soal)) {
            $file =  $request->file('soal');
            $extension = $file->getClientOriginalExtension();
            $filename = $request->materi . '_' . $mapel->nama . '_' . date("Y-m-dTHis") . "." . $extension;
            $path = $file->storeAs('private/soal', $filename);
            $soal->file = $filename;
            $soal->judul = $request->materi;
            $soal->tgl_buat = date("Ymd");
            $soal->id_mapel = $request->id_mapel;
            $soal->save();
            $jadwal->id_soal = $soal->id;
        }
        $jadwal->tanggal = $request->tanggal;
        $jadwal->sesi = $request->sesi;
        $jadwal->materi = $request->materi;
        $jadwal->id_guru = $request->id_guru;
        $jadwal->id_mapel = $request->id_mapel;
        $jadwal->id_murid = Auth::user()->id;
        $jadwal->status = 0;
        $jadwal->save();
        return redirect()->route('murid.jadwal')->withSuccess('Penambahan Jadwal Berhasil');
    }

    public function storeGuru(Request $request)
    {
        $mapel = Mapel::find($request->id_mapel);
        $this->validate($request, [
            'soal' => 'mimes:pdf,doc,docx,pptx',
            'materi' =>'required',
            'tanggal' =>'required|date',
            'sesi' =>'required',
        ]);
        if($request->id_murid==0){
            return back()->withErrors('Siswa harus dipilih');
        }
        if($request->id_mapel==0){
            return back()->withErrors('Mata Pelajaran harus dipilih');
        }
        if($request->sesi==0){
            return back()->withErrors('Sesi harus dipilih');
        }
        $soal = new Soal;
        $jadwal = new Jadwal();
        if (!is_null($request->soal)) {
            $file =  $request->file('soal');
            $extension = $file->getClientOriginalExtension();
            $filename = $request->materi . '_' . $mapel->nama . '_' . date("Y-m-dTHis") . "." . $extension;
            $path = $file->storeAs('private/soal', $filename);
            $soal->file = $filename;
            $soal->judul = $request->materi;
            $soal->tgl_buat = date("Ymd");
            $soal->id_mapel = $request->id_mapel;
            $soal->save();
            $jadwal->id_soal = $soal->id;
        }
        $jadwal->tanggal = $request->tanggal;
        $jadwal->sesi = $request->sesi;
        $jadwal->materi = $request->materi;
        $jadwal->id_murid = $request->id_murid;
        $jadwal->id_mapel = $request->id_mapel;
        $jadwal->id_guru = Auth::user()->id;
        $jadwal->status = 1;
        $jadwal->save();
        return redirect()->route('guru.jadwal')->withSuccess('Penambahan Jadwal Berhasil');
    }

    public function edit(Request $request)
    {
        $mapel = Mapel::find($request->id_mapel);
        $this->validate($request, [
            'soal' => 'mimes:pdf,doc,docx,pptx',
            'materi' =>'required|date',
            
        ]);
        if($request->id_guru==0){
            return back()->withErrors('Pengajar harus dipilih');
        }
        if($request->id_mapel==0){
            return back()->withErrors('Mata Pelajaran harus dipilih');
        }
        $jadwal = Jadwal::find($request->id);
        $soal = new Soal;
        if (!is_null($request->soal)) {
            $file =  $request->file('soal');
            $extension = $file->getClientOriginalExtension();
            $filename = $request->materi . '_' . $mapel->nama . '_' . date("Y-m-dTHis") . "." . $extension;
            $path = $file->storeAs('private/soal', $filename);
            $soal->file = $filename;
            $soal->judul = $request->materi;
            $soal->tgl_buat = date("Ymd");
            $soal->id_mapel = $request->id_mapel;
            $soal->save();
            $jadwal->id_soal = $soal->id;
        }
        $jadwal->materi = $request->materi;
        $jadwal->id_guru = $request->id_guru;
        $jadwal->id_mapel = $request->id_mapel;
        $jadwal->id_murid = Auth::user()->id;
        $jadwal->status = 1;
        $jadwal->save();
        return redirect()->route('murid.jadwal')->withSuccess('Penambahan Jadwal Berhasil');
    }


    public function edit_guru(Request $request)
    {
        $mapel = Mapel::find($request->id_mapel);
        $this->validate($request, [
            'soal' => 'mimes:pdf,doc,docx,pptx',
            'materi' =>'required',
            'sesi' =>'required',
        ]);
        if($request->id_murid==0){
            return back()->withErrors('Siswa harus dipilih');
        }
        if($request->id_mapel==0){
            return back()->withErrors('Mata Pelajaran harus dipilih');
        }
        if($request->sesi==0){
            return back()->withErrors('Sesi harus dipilih');
        }
        $jadwal = Jadwal::find($request->id);
        $soal = new Soal;
        if (!is_null($request->soal)) {
            $file =  $request->file('soal');
            $extension = $file->getClientOriginalExtension();
            $filename = $request->materi . '_' . $mapel->nama . '_' . date("Y-m-dTHis") . "." . $extension;
            $path = $file->storeAs('private/soal', $filename);
            $soal->file = $filename;
            $soal->judul = $request->materi;
            $soal->tgl_buat = date("Ymd");
            $soal->id_mapel = $request->id_mapel;
            $soal->save();
            $jadwal->id_soal = $soal->id;
        }
        $jadwal->sesi = $request->sesi;
        $jadwal->materi = $request->materi;
        $jadwal->id_murid = $request->id_murid;
        $jadwal->id_mapel = $request->id_mapel;
        $jadwal->id_guru = Auth::user()->id;
        $jadwal->status = 1;
        $jadwal->save();
        return redirect()->route('guru.jadwal')->withSuccess('Jadwal Berhasil Diubah');
    }
}
