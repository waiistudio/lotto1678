<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function question()
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
}
