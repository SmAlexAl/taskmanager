<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable =
      ['title','description'];


    public function user(){
        return $this->belongsTo('App\User');
    }

    public function developers(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }


    protected $table = 'projects';
}
