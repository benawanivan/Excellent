<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mapel;
use App\Models\Jadwal;
use App\Models\Soal;
use App\Models\Ortu;
use App\Models\Murid;
use App\Models\Guru;
use App\Models\Tryout;
use Carbon\Carbon;
use Auth;
use Hash;

class MuridController extends Controller
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
        ->where('id_murid',Auth::user()->id)->orderBy('sesi')->get();
        // $jadwal = Jadwal::all();
        return view('murid.viewJadwal',['jadwal'=>$jadwal,'tanggal'=>$tanggal],compact('jadwal'));
       
    }

    public function viewJadwalDetail(Request $request){
        // return 1;
        $jadwal = Jadwal::find($request->id);
        return view('murid.viewJadwalDetail',['jadwal'=> $jadwal]);
        
    }
    public function editJadwal(Request $request){
        $jadwal = Jadwal::find($request->id);
        $mapel = Mapel::all();
        $guru = Guru::all();
        return view('murid.editJadwal',['mapel'=>$mapel,'guru'=>$guru,'jadwal'=>$jadwal],compact('jadwal'));

    }
    public function addJadwal(Request $request){
        $mapel = Mapel::all();
        $guru = Guru::all();
        return view('murid.addJadwal',['mapel'=>$mapel,'guru'=>$guru,'tanggal'=>$request->tanggal],compact('mapel'));

    }
    public function viewProfile()
    {
        return view('murid.viewProfile');
       
    }
    public function viewSoal()
    {
        $keyword = NULL;
        $soal = Soal::paginate(12);
        return view('murid.viewSoal',['soal'=>$soal,'keyword'=>$keyword],compact('soal'));
    }

    public function searchSoal(Request $request){
        $soal = Soal::where('judul','like',"%".$request->keyword."%")->paginate(12);
        return view('murid.viewSoal',['soal'=>$soal,'keyword'=>$request->keyword],compact('soal'));
    }
    public function updateProfile(Request $request){
        $murid = AUTH::user();
        $this->validate($request,[
            'password' => 'required|min:8',
            'repassword' => 'required_with:password|same:password||min:8'
        ]);
        $murid->password = Hash::make($request->password);
        $murid->save();
        return back()->with('success',"Password berhasil diubah");
    }

    public function addSoal(){
        $mapel = Mapel::all();
        return view('murid.addSoal',['mapel'=>$mapel],compact('mapel'));
    }

    public function viewTryout()
    {
        $keyword = NULL;
        if(Auth::user()->kelas==6){
            $tryout = Tryout::where('kelas','=','SD')->paginate(12);
        }elseif(Auth::user()->kelas==9){
            $tryout = Tryout::where('kelas','=','SMP')->paginate(12);
        }elseif(Auth::user()->kelas==12){
            $tryout = Tryout::where('kelas','=','SMA')->paginate(12);
        }else{
            return 'error';
        }
        
        return view('murid.viewTryout',['tryout'=>$tryout,'keyword'=>$keyword],compact('tryout'));
    }

    public function searchTryout(Request $request){
        if(Auth::user()->kelas==6){
            $tryout = Tryout::where('kelas','=','SD')
            ->where('judul','like',"%".$request->keyword."%")
            ->paginate(12);
        }elseif(Auth::user()->kelas==9){
            $tryout = Tryout::where('kelas','=','SMP')
            ->where('judul','like',"%".$request->keyword."%")
            ->paginate(12);
        }elseif(Auth::user()->kelas==12){
            $tryout = Tryout::where('kelas','=','SMA')
            ->where('judul','like',"%".$request->keyword."%")
            ->paginate(12);
        }else{
            return 'error';
        }
        return view('murid.viewTryout',['tryout'=>$tryout,'keyword'=>$request->keyword],compact('tryout'));
    }

    public function viewNonaktif()
    {
        return view('murid.viewNonaktif');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'password' => 'required|min:8',
            'nama' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'username' => 'required|unique:murid',
            'id_cabang' => 'required',
            'status' =>'required', 
            'no_telp' => 'required',
            'password_ortu' => 'required|min:8',
            'nama_ortu' => 'required',
            'username_ortu' => 'required|unique:ortu,username',
            'no_telp_ortu' => 'required',
        ]);
        
        $murid = new Murid();
        $murid->nama = $request->nama;
        $murid->username = $request->username;
        $murid->id_cabang = $request->id_cabang;
        $murid->kelas = $request->kelas;
        $murid->asal_sekolah = $request->asal_sekolah;
        $murid->status = $request->status;
        $murid->no_telp = $request->no_telp;
        $murid->password = Hash::make($request->password);
        $murid->save();
        $ortu = new Ortu();
        $ortu->nama = $request->nama_ortu;
        $ortu->username = $request->username_ortu;
        $ortu->no_telp = $request->no_telp_ortu;
        $ortu->password = Hash::make($request->password_ortu);
        $ortu->id_murid = $murid->id;
        $ortu->save();
        
        return back()->with('success',"Data siswa berhasil disimpan");
    }
    public function edit(Request $request)
    {
        $this->validate($request,[
            // 'password' => 'min:8|nullable',
            'nama' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'username' => 'required|unique:murid'.($request->id ? ",id,$request->id" : ''),
            'id_cabang' => 'required',
            'status' =>'required',
            'no_telp' => 'required',
            // 'password_ortu' => 'min:8!nullable',
            'nama_ortu' => 'required',
            'username_ortu' => 'required|unique:ortu'.($request->id ? ",id,$request->id" : ''),
            'no_telp_ortu' => 'required',
            
        ]);
        $murid = Murid::find($request->id);
        $murid->nama = $request->nama;
        $murid->username = $request->username;
        $murid->id_cabang = $request->id_cabang;
        $murid->kelas = $request->kelas;
        $murid->asal_sekolah = $request->asal_sekolah;
        $murid->status = $request->status;
        $murid->no_telp = $request->no_telp;
        if(($request->password) != ''){
            $murid->password = Hash::make($request->password);
        }
        $murid->save();
        $ortu = $murid->ortu;
        $ortu->nama = $request->nama_ortu;
        $ortu->username = $request->username_ortu;
        $ortu->no_telp = $request->no_telp_ortu;
        if(($request->password_ortu) != ''){
            $ortu->password = Hash::make($request->password_ortu);
        }else{
            $ortu->password = $ortu->password;
        }
        $ortu->id_murid;
        $ortu->save();
        return back()->with('success',"Data siswa berhasil diubah");
    }
    public function delete($id)
    {
        $murid = Murid::find($id);
        $murid->delete();
        
        return back()->with('success','murid berhasil dihapus');
    }
}
