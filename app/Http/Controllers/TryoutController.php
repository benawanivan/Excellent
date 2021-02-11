<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tryout;
use Validator;
use Illuminate\Support\Facades\Storage;

class TryoutController extends Controller
{
    public function store(Request $request)
    {
        $tryout = new Tryout;
        $tryout->judul = $request->judul;
        $tryout->link = $request->link;
        $tryout->tgl_buat = date("Ymd");
        $tryout->save();
        
        return redirect()->route('guru.tryout')->with('success','Upload Tryout Berhasil');
        // return $request;
    }

    public function delete($id)
    {
        $tryout = Tryout::find($id);
        $tryout->delete();
        
        return back()->with('success','Tryout berhasil dihapus');
    }
}
