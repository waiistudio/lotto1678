<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_data extends Model
{
    
    protected $table = 'users';

    public function levels(){
        return $this->belongsTo('App\levels', 'status','id');
    }
}
