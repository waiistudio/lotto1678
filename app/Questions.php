<?php

namespace App;
use Str;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    
    protected $fillable = ['title','body'];

    public function user(){
        return $this->belongTo(User::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
