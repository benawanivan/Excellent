<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\Admin;
use App\Models\Soal;
use App\Models\Murid;
use App\Models\Guru;
use App\Models\Laporan;
use App\Models\Cabang;
use App\Models\JadwalDefault;
use Auth;
use Hash;
use Carbon\Carbon;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function viewDashboard()
    {
        return view('admin.viewDashboard');
       
    }
    public function viewSoal()
    {
        $keyword = NULL;
        $soal = Soal::paginate(12);
        return view('admin.viewSoal',['soal'=>$soal,'keyword'=>$keyword],compact('soal'));
    }

    public function searchSoal(Request $request){
        $soal = Soal::where('judul','like',"%".$request->keyword."%")->paginate(12);
        return view('admin.viewSoal',['soal'=>$soal,'keyword'=>$request->keyword],compact('soal'));
    }
    public function addSoal(){
        $mapel = Mapel::all();
        return view('admin.addSoal',['mapel'=>$mapel],compact('mapel'));
    }

    public function viewDataMurid()
    {
        $keyword = NULL;
        $murid = Murid::paginate(20);
        return view('admin.viewDataMurid',['murid'=>$murid,'keyword'=>$keyword],compact('murid'));
    }
    public function SearchMurid(Request $request)
    {
        $cabang = Cabang::where('nama','like',"%".$request->keyword."%")->get()->first();
        $murid = Murid::where('nama','like',"%".$request->keyword."%")
        ->orwhere('username','like',"%".$request->keyword."%")
        ->orwhere('asal_sekolah','like',"%".$request->keyword."%")
        ->orwhere('id_cabang','=',is_null($cabang)?"-999":$cabang->id)
        ->orwhere('kelas','=',$request->keyword)
        ->orwhere('status','=',$request->keyword=='aktif'?1:($request->keyword=='non aktif'?0:-1))
        ->paginate(20);
        return view('admin.viewDataMurid',['murid'=>$murid,'keyword'=>$request->keyword],compact('murid'));
    }
    public function addMurid(){
        $cabang = Cabang::all();
        return view('admin.addMurid',['cabang'=>$cabang],compact('cabang'));
    }
    public function editMurid(Request $request){
        $cabang = Cabang::all();
        $murid = Murid::find($request->id);
        return view('admin.editMurid',['cabang'=>$cabang,'murid'=>$murid],compact('murid'));
    }



    public function viewDataGuru()
    {
        $keyword = NULL;
        $guru = Guru::paginate(20);
        return view('admin.viewDataGuru',['cabang'=>$guru,'keyword'=>$keyword],compact('guru'));
    }
    public function SearchGuru(Request $request)
    {
        $cabang = Cabang::where('nama','like',"%".$request->keyword."%")->get()->first();
        $guru = Guru::where('nama','like',"%".$request->keyword."%")
        ->orwhere('username','like',"%".$request->keyword."%")
        ->orwhere('link_meeting','like',"%".$request->keyword."%")
        ->orwhere('id_cabang','=',is_null($cabang)?"-999":$cabang->id)
        ->paginate(20);
        return view('admin.viewDataGuru',['guru'=>$guru,'keyword'=>$request->keyword],compact('guru'));
    }
    public function addGuru(){
        $cabang = Cabang::all();
        return view('admin.addGuru',['cabang'=>$cabang],compact('cabang'));
    }
    public function editGuru(Request $request){
        $cabang = Cabang::all();
        $guru = Guru::find($request->id);
        return view('admin.editGuru',['cabang'=>$cabang,'guru'=>$guru],compact('guru'));
    }


    public function viewDataCabang()
    {
        $keyword = NULL;
        $cabang = Cabang::paginate(20);
        return view('admin.viewDataCabang',['cabang'=>$cabang,'keyword'=>$keyword],compact('cabang'));
    }
    public function SearchCabang(Request $request)
    {
        $cabang = Cabang::where('nama','like',"%".$request->keyword."%")
        ->paginate(20);
        return view('admin.viewDataCabang',['cabang'=>$cabang,'keyword'=>$request->keyword],compact('cabang'));
    }
    public function addCabang(){
        return view('admin.addCabang');
    }
    public function editCabang(Request $request){
        $cabang = Cabang::find($request->id);
        return view('admin.editCabang',['cabang'=>$cabang],compact('cabang'));
    }

    public function viewDataMapel()
    {
        $keyword = NULL;
        $mapel = Mapel::paginate(20);
        return view('admin.viewDataMapel',['mapel'=>$mapel,'keyword'=>$keyword],compact('mapel'));
    }
    public function SearchMapel(Request $request)
    {
        $mapel = Mapel::where('nama','like',"%".$request->keyword."%")
        ->orwhere('tingkat','=',$request->keyword)
        ->paginate(20);
        return view('admin.viewDataMapel',['mapel'=>$mapel,'keyword'=>$request->keyword],compact('mapel'));
    }
    public function addMapel(){
        return view('admin.addMapel');
    }
    public function editMapel(Request $request){
        $mapel = Mapel::find($request->id);
        return view('admin.editMapel',['mapel'=>$mapel],compact('mapel'));
    }

    public function viewLaporan(Request $request)
    {
        if(is_null($request->tanggal)){
            $tanggal = Carbon::now();
        }else{
            $tanggal = Carbon::parse($request->tanggal);
        }
        $keyword = NULL;
        $murid = Murid::all();
        $laporan = Laporan::where('tanggal','=',$tanggal->format('Y-m-d'));
        $murid = DB::table('murid')
        ->select('cabang.nama as nama_cabang','laporan.*','murid.nama',
        'murid.asal_sekolah','murid.username','murid.kelas','murid.status','murid.id as id_murid')
        ->join('cabang','cabang.id','=','murid.id_cabang')
        ->leftjoinSub($laporan, 'laporan', function ($join) {
            $join->on('murid.id', '=', 'laporan.id_murid');
        })
        ->paginate(20);
        return view('admin.viewLaporan',['murid'=>$murid,'keyword'=>$keyword,'tanggal'=>$tanggal],compact('murid'));
    }

    public function viewAturJadwal(Request $request){
        $murid = Murid::find($request->id);
        $jadwal = JadwalDefault::where('id_murid','=',$request->id)
        ->orderBy('hari')
        ->orderBy('sesi')
        ->get();
        return view('admin.viewAturJadwal',['murid'=>$murid,'jadwal'=>$jadwal],compact('murid'));
    }
    public function viewDataAdmin()
    {
        $keyword = NULL;
        $admin = Admin::where('master','=',0)->paginate(20);
        return view('admin.viewDataAdmin',['admin'=>$admin,'keyword'=>$keyword],compact('admin'));
    }
    public function SearchAdmin(Request $request)
    {
        $cabang = Cabang::where('nama','like',"%".$request->keyword."%")->get()->first();
        $admin = Admin::where('nama','like',"%".$request->keyword."%")
        ->orwhere('username','like',"%".$request->keyword."%")
        ->orwhere('id_cabang','=',is_null($cabang)?"-999":$cabang->id)
        ->paginate(20);
        return view('admin.viewDataAdmin',['admin'=>$admin,'keyword'=>$request->keyword],compact('admin'));
    }
    public function addAdmin(){
        $cabang = Cabang::all();
        return view('admin.addAdmin')->with('cabang',$cabang);
    }
    public function editAdmin(Request $request){
        $admin = admin::find($request->id);
        $cabang = Cabang::all();
        return view('admin.editAdmin',['admin'=>$admin,'cabang'=>$cabang],compact('admin'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'password' => 'required|min:8',
            'nama' => 'required',
            'username' => 'required|unique:admin',
            'id_cabang' => 'required',
        ]);
        $admin = new Admin();
        $admin->nama = $request->nama;
        $admin->username = $request->username;
        $admin->id_cabang = $request->id_cabang;
        $admin->password = Hash::make($request->password);
        $admin->master = 0;
        $admin->save();
        return back()->with('success',"Data admin berhasil disimpan");
    }
    public function edit(Request $request)
    {
        $this->validate($request,[
            'password' => 'required|min:8',
            'nama' => 'required',
            'username' => 'required|unique:admin'.($request->id ? ",id,$request->id" : ''),
            'id_cabang' => 'required',
        ]);
        $admin = Admin::find($request->id);
        $admin->nama = $request->nama;
        $admin->username = $request->username;
        $admin->id_cabang = $request->id_cabang;
        $admin->password = Hash::make($request->password);
        $admin->master = 0;
        $admin->save();
        return back()->with('success',"Data admin berhasil diubah");
    }
    public function delete($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        
        return back()->with('success','Admin berhasil dihapus');
    }
}

