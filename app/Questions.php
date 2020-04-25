<?php

namespace App;
use Str;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    
    protected $fillable = ['title','body','slug'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = $value;
    }

    public function getUrlAttribute()
    {
        return route('questions.show',$this->slug);
    }

    public function getCreatedDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function getStatusAttribute(){
        if ($this->answers_count>0) {
            if ($this->best_answer_id) {
                return "answered-accepted";
            }
            return "answered";
        }
            return "unanswered";
    }


    public function getBodyHtmlAttribute()
    {
        $Parsedown = new \Parsedown();

        return $Parsedown->text($this->body);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
