<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    public function article(){
        return $this->belongsTo('App\Article');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    protected $fillable = ['name','text','user_id','article_id','parant_id','email','site'];
}
