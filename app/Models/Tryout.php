<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tryout extends Model
{
    use HasFactory;
    protected $table = "tryout";
    public $primaryKey = 'id';
    public $timestamps = false;

}
