<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class levels extends Model
{
    protected $table = 'levels';

    public function user_data(){
        return $this->hasMany('App\user_data');;
    }
}
