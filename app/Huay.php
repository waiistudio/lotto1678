<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Huay extends Model
{
    protected $fillable=['lottoname','lottoDate','status','DateExpire'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['lottoname'] = $value;
        $this->attributes['lottoDate'] = $value;
        $this->attributes['status'] = $value;
        $this->attributes['DateExpire'] = $value;
    }
}
