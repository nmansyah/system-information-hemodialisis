<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // fungsi untuk mengecek apakakah admin atau bukan
    public function isAdmin()
    {
      if ($this->role==1) {
        return true;
      }
      return false;
    }

    public function isPegawai()
    {
      if ($this->role==2) {
        return true;
      }
      return false;
    }

    public function isDok()
    {
      if ($this->role==3) {
        return true;
      }
      return false;
    }
}
