<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $table = "laporan";
    public $primaryKey = 'id';
    public $timestamps = false;
    public function getType($filename){
        return pathinfo(storage_path("/bukti/" . $filename), PATHINFO_EXTENSION);
    }
}
