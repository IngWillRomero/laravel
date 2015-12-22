<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = "articles" ;

    protected $fillable = ['title','content','category_id','user_id'] ;


    // es una relacion de uno a muchos de parte de articles y categories
    public function category(){
      return $this->belongsTo('App\Category') ;
    }

    public function user(){
      return $this->belongsTo('App\User') ;
    }

    public function images(){
      return $this->hasMany('App\Image') ;
    }

    // muchos a muchos

    public function tags(){
      return $this->belongsToMany('App\Tag') ;
    }

}
