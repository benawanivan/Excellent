<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;
    protected $table = "jadwal";
    public $primaryKey = 'id';
    public $timestamps = false;
    public function Mapel()
    {
        return $this->belongsTo(Mapel::class,'id_mapel','id');
    }
    public function Guru()
    {
        return $this->belongsTo(Guru::class,'id_guru','id');
    }
    public function Murid()
    {
        return $this->belongsTo(Murid::class,'id_murid','id');
    }
    public function Soal()
    {
        return $this->belongsTo(Soal::class,'id_soal','id');
    }
}
