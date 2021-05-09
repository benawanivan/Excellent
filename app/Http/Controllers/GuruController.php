<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\Soal;
use App\Models\Jadwal;
use App\Models\Murid;
use App\Models\Tryout;
use App\Models\Guru;
use Carbon\Carbon;
use Auth;
use Hash;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function viewJadwal(Request $request)
    {
        if(is_null($request->tanggal)){
            $tanggal = Carbon::now();
        }else{
            $tanggal = Carbon::parse($request->tanggal);
        }
        
        $jadwal = Jadwal::whereBetween('tanggal',[$tanggal->startOfWeek()->format('Y-m-d'),$tanggal->endOfWeek()->format('Y-m-d')])
        ->where('id_guru',Auth::user()->id)->distinct()->get(['tanggal','sesi']);

        $jadwal2 = Jadwal::whereBetween('tanggal',[$tanggal->startOfWeek()->format('Y-m-d'),$tanggal->endOfWeek()->format('Y-m-d')])
        ->where('id_guru',Auth::user()->id)->get();
        // $jadwal = Jadwal::all();
        return view('guru.viewJadwal',['jadwal'=>$jadwal,'tanggal'=>$tanggal, 'jadwal2'=>$jadwal2],compact('jadwal'));
       
    }

    public function viewJadwalDetail(Request $request){
        // return 1;
        $jadwal = Jadwal::where('tanggal', $request->tanggal)->where('sesi', $request->sesi)->where('id_guru',Auth::user()->id)->get();
        return view('guru.viewJadwalDetail',['jadwal'=> $jadwal],compact('jadwal'));
        
    }

    public function editJadwal(Request $request){
        $jadwal = Jadwal::find($request->id);
        $mapel = Mapel::all();
        $murid = Murid::all();
        return view('guru.editJadwal',['mapel'=>$mapel,'murid'=>$murid,'jadwal'=>$jadwal],compact('jadwal'));

    }
    public function addJadwal(Request $request){
        $mapel = Mapel::all();
        $murid = Murid::all();
        return view('guru.addJadwal',['mapel'=>$mapel,'murid'=>$murid,'tanggal'=>$request->tanggal],compact('mapel'));

    }

    public function editProfile()
    {
        return view('guru.editProfile');
    }

    public function viewSoal()
    {
        $keyword = NULL;
        $soal = Soal::paginate(12);
        return view('guru.viewSoal',['soal'=>$soal,'keyword'=>$keyword],compact('soal'));
    }

    public function viewTryout()
    {
        $keyword = NULL;
        $tryout = Tryout::paginate(12);
        return view('guru.viewTryout',['tryout'=>$tryout,'keyword'=>$keyword],compact('tryout'));
    }

    public function deleteTryout($id)
    {
        Tryout::find($id)->delete();
        return back()->with('success',"Tryout berhasil dihapus");
    }
    public function searchSoal(Request $request){
        $soal = Soal::where('judul','like',"%".$request->keyword."%")->paginate(12);
        return view('guru.viewSoal',['soal'=>$soal,'keyword'=>$request->keyword],compact('soal'));
    }
    public function searchTryout(Request $request){
        $tryout = Tryout::where('judul','like',"%".$request->keyword."%")->paginate(12);
        return view('guru.viewTryout',['tryout'=>$tryout,'keyword'=>$request->keyword],compact('tryout'));
    }

    public function updateProfile(Request $request){
        $guru = AUTH::user();
        $this->validate($request,[
            'password' => 'required|min:8',
            'repassword' => 'required_with:password|same:password||min:8'
        ]);
        $guru->password = Hash::make($request->password);
        $guru->save();
        return back()->with('success',"Password berhasil diubah");
    }


    public function updateLink(Request $request){
        $guru = AUTH::user();
        $guru->link_meeting = $request->link_meeting;
        $guru->save();
        return back()->with('success',"Link Meeting berhasil diubah");
    }

    public function addSoal(){
        $mapel = Mapel::all();
        return view('guru.addSoal',['mapel'=>$mapel],compact('mapel'));
    }

    public function addTryout(){
        return view('guru.addTryout');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'password' => 'required|min:8',
            'nama' => 'required',
            'link_meeting' => 'required',
            'username' => 'required|unique:guru',
            'id_cabang' => 'required',
        ]);
        $guru = new Guru();
        $guru->nama = $request->nama;
        $guru->username = $request->username;
        $guru->link_meeting = $request->link_meeting;
        $guru->id_cabang = $request->id_cabang;
        $guru->password = Hash::make($request->password);
        $guru->save();
        return back()->with('success',"Data guru berhasil disimpan");
    }
    public function edit(Request $request)
    {
        $this->validate($request,[
            // 'password' => 'min:8',
            'nama' => 'required',
            'link_meeting' => 'required',
            'username' => 'required|unique:guru'.($request->id ? ",id,$request->id" : ''),
            'id_cabang' => 'required',
        ]);
        $guru = Guru::find($request->id);
        $guru->nama = $request->nama;
        $guru->username = $request->username;
        $guru->link_meeting = $request->link_meeting;
        $guru->id_cabang = $request->id_cabang;
        if(($request->password)!=''){
            $guru->password = Hash::make($request->password);
        }
        $guru->save();
        return back()->with('success',"Data guru berhasil diubah");
    }
    public function konfirmasi(Request $request)
    {
        $jadwal = Jadwal::find($request->id);
        $jadwal->status = "1";
        $jadwal->save();
        return back()->with('success',"Data jadwal berhasil dikonfirmasi");
    }
    public function unconfirm(Request $id)
    {
        $jadwal = Jadwal::find($id->id);
        $jadwal->delete();
        
        return back()->with('success','Jadwal berhasil dihapus');
    }
    public function delete($id)
    {
        $guru = Guru::find($id);
        $guru->delete();
        
        return back()->with('success','Guru berhasil dihapus');
    }

}
