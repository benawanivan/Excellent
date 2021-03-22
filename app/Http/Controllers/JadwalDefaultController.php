<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalDefault;
use App\Models\Jadwal;
use DateTime;
use \Carbon\Carbon;
use DateInterval;
use DatePeriod;
class JadwalDefaultController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'tgl_mulai' =>'required|date',
            'tgl_akhir' =>'required|date',
        ]);
        if($request->sesi==0){
            return back()->withErrors('Sesi harus dipilih');
        }
        if($request->hari=='0'){
            return back()->withErrors('Hari harus dipilih');
        }
        if($request->tgl_mulai>=$request->tgl_akhir){
            return back()->withErrors('Tanggal mulai harus sebelum tanggal akhir');
        }
        $jadwalDefault = JadwalDefault::where('id_murid','=',$request->id_murid)
        ->where('sesi','=',$request->sesi)
        ->where('hari','=',$request->hari)
        ->get();
        if(!is_null($jadwalDefault->first())){
            return back()->withErrors('Jadwal pada hari dan sesi yang dipilih sudah ada');
        }
        $jadwalDefault = new JadwalDefault();
        $jadwalDefault->id_murid = $request->id_murid;
        $jadwalDefault->sesi = $request->sesi;
        $jadwalDefault->hari = $request->hari;
        $jadwalDefault->tgl_mulai = $request->tgl_mulai;
        $jadwalDefault->tgl_akhir = $request->tgl_akhir;
        $jadwalDefault->save();
        $begin = new DateTime($request->tgl_mulai);
        $end = new DateTime($request->tgl_akhir);

        $interval = DateInterval::createFromDateString('1 day');
        $period = new DatePeriod($begin, $interval, $end);

        foreach ($period as $dt) {
            $hari =  new Carbon($dt);
            if($hari->dayOfWeekIso == $request->hari){
                $jadwal = new Jadwal();
                $jadwal->id_murid = $request->id_murid;
                $jadwal->tanggal = $dt->format('Y-m-d');
                $jadwal->sesi = $request->sesi;
                $jadwal->status = -1;
                $jadwal->save();
            }
        }
        return back()->with('success','Penambahan Jadwal Berhasil');;
    }
    public function delete($id)
    {
        $jadwalDefault = JadwalDefault::find($id);
        $begin = new DateTime($jadwalDefault->tgl_mulai);
        $end = new DateTime($jadwalDefault->tgl_akhir);

        $interval = DateInterval::createFromDateString('1 day');
        $period = new DatePeriod($begin, $interval, $end);

        foreach ($period as $dt) {
            $hari =  new Carbon($dt);
            if($hari->dayOfWeekIso == $jadwalDefault->hari){
                $jadwal = Jadwal::where('sesi','=',$jadwalDefault->sesi)
                ->where('tanggal','=',$dt)
                ->where('status','=',-1);
                if(!is_null($jadwal->first())){
                    $jadwal->delete();
                }
                
            }
        }
        $jadwalDefault->delete();
        return back()->with('success','Mapel berhasil dihapus');
    }
}
