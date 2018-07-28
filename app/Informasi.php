<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//MODEL
use app\User;

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
        'kategori',
        'id_user',
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
