<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Askep extends Model
{
    protected $table = 'askeps';

    public function checkIsTrue($attribute){
        return ($attribute == 'true' ? 1 : 0);
    }
}
