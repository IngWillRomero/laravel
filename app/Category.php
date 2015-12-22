<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = "categories" ;

    protected $fillable = ['name'] ;

    // es una relacion de uno a muchos de parte de articles y categories
    public function articles(){
      return $this->hasMany('App\Article') ;
    }

}
