<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    use HasFactory;
    protected $table = "cabang";
    public $primaryKey = 'id';
    public $timestamps = false;
    public function Murid()
    {
        return $this->hasMany(Murid::class,'id_cabang');
    }
}
