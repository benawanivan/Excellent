<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Laporan;
use Carbon\Carbon;
use Auth;
use Hash;

class OrtuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function viewLaporan()
    {
        $keyword = NULL;
        $laporan = Laporan::paginate(12);
        return view('ortu.viewLaporan',['laporan'=>$laporan,'keyword'=>$keyword],compact('laporan'));
       
    }
    public function viewJadwal(Request $request)
    {
        if(is_null($request->tanggal)){
            $tanggal = Carbon::now();
        }else{
            $tanggal = Carbon::parse($request->tanggal);
        }
        
        $jadwal = Jadwal::whereBetween('tanggal',[$tanggal->startOfWeek()->format('Y-m-d'),$tanggal->endOfWeek()->format('Y-m-d')])
        ->where('id_murid',Auth::user()->id_murid)->get();
        // $jadwal = Jadwal::all();
        return view('ortu.viewJadwal',['jadwal'=>$jadwal,'tanggal'=>$tanggal],compact('jadwal'));
       
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
