<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Murid;
use App\Models\Laporan;
use Carbon\Carbon;
use Auth;
use Hash;
use DB;
use Illuminate\Support\Facades\Storage;

class OrtuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function viewLaporan(Request $request)
    {
        if(is_null($request->tanggal)){
            $tanggal = Carbon::now();
        }else{
            $tanggal = Carbon::parse($request->tanggal);
        }
        $awalminggu = $tanggal->startOfWeek();
        $tanggal2 = Carbon::parse($request->tanggal)->subDays(7)->startOfWeek();
        $laporan = Laporan::where('tanggal','=',$awalminggu->format('Y-m-d'))->where('id_murid',Auth::user()->id_murid);
        $murid = DB::table('murid')
        ->select('laporan.*','murid.nama','murid.id as id_murid')
        ->rightjoinSub($laporan, 'laporan', function ($join) {
            $join->on('murid.id', '=', 'laporan.id_murid');
        })
        ->first();
        $nama = Murid::where('id',Auth::user()->id_murid)->first();
        return view('ortu.viewLaporan',['murid'=>$murid,'nama'=>$nama,'tanggal'=>$tanggal,'tanggal2'=>$tanggal2],compact('laporan'));
    }

    public function embedLaporan($id){
        $laporan = Laporan::find($id);
        return response()->file(storage_path('app/private/laporan/' . $laporan->file));
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
