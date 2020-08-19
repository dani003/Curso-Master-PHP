<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likes';

    //Relacion Many To One / Muchos a uno
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    //Relacion Many To One / Muchos a uno
    public function image(){
        return $this->hasMany('App\Image', 'image_id');
    }
}
