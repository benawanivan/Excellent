<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;
    protected $table = "soal";
    public $primaryKey = 'id';
    public $timestamps = false;
    public function Mapel()
    {
        return $this->belongsTo(Mapel::class,'id_mapel','id');
    }
    public function getType($filename){
        return pathinfo(storage_path("/bukti/" . $filename), PATHINFO_EXTENSION);
    }
    public function Jadwal()
    {
        return $this->hasMany(Jadwal::class,'id_jadwal');
    }
}
