<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    //Relacion One To Many / de uno a muchos
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    //Relacion One To Many
    public function likes(){
        return $this->hasMany('App\Like');
    }
    //Relacion Many To One / Muchos a uno
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
