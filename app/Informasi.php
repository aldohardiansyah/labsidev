<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//MODEL
use app\Users;

class Informasi extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'informasi';
    public $timestamps = false;
    protected $fillable = [
        'judul',
        'photo',
        'slug',
        'kategori',
        'id_user',
        'tgl_buat',
        'isi'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
    ];



    public function user() {
      return $this->hasOne(User::class,'id','id_user');
    }



}
