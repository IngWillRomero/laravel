<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $table = "tags" ;

    protected $fillable = ['name'] ;

    public function articles(){
      // al fu¿inal de la linea   ->winthTimestamps()
      return $this->belongsToMany('App\Article') ;
    }
}
