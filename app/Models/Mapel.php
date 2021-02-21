<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $table = "mapel";
    public $primaryKey = 'id';
    public $timestamps = false;
    public function Soal()
    {
        return $this->hasMany(Soal::class,'id_mapel');
    }
    public function Jadwal()
    {
        return $this->hasMany(Jadwal::class,'id_jadwal');
    }
}
