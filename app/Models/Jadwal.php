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
}
