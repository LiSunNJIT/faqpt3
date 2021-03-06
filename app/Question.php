<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['body'];


    public function user()
    {

        return $this->belongsTo('App\Question');
    }

    public function answers()
    {

        return $this->hasMany('App\Answer');
    }
}
