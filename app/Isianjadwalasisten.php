<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Praktikum;
use App\Asisten;


class Isianjadwalasisten extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'isian_jadwal_asisten';
    public $timestamps = false;
    protected $fillable = [
        'id_asisten',
        'nama_lengkap',
        'senin',
        'selasa',
        'rabu',
        'kamis',
        'jumat',
        'sabtu',
        'minggu'


    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];

    public function jadwalpraktikum() {
      return $this->hasOne(Jadwalpraktikum::class,'id','id_jadwalpraktikum')->with('kelas')->with('praktikum')->with('laboratorium');
    }
    public function asisten() {
      return $this->hasOne(Asisten::class,'id','id_asisten');
    }
}
