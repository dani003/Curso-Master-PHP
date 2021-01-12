<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    // Relación One To Many / de uno a muchos
    public function comments()
    {
        return $this->hasMany('App\Comment')->orderBy('id', 'desc');
    }

    // Relación One To Many 
    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    // Relación de Muchos a Uno
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
