<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title','plot','release', 'genre_id'];
    public function genre(){
      return $this->belongsTo('App\Genre');
    }
}
