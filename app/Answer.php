<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function questions()
    {
        return $this->belongsTo(Questions::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getBodyHtmlAttribute()
    {
        $Parsedown = new \Parsedown();

        return $Parsedown->text($this->body);
    }

     public static function boot()
    {
        parent::boot();

        static::created(function ($answer) {
            $answer->questions->increment('answers_count');
            $answer->questions->save();            
        }); 
    }
}
