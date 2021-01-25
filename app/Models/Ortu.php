<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Ortu extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = "ortu";
    public $primaryKey = 'id';
    public $timestamps = false; 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function Murid()
    {
        return $this->belongsTo(Murid::class,'id_murid','id');
    }
}
