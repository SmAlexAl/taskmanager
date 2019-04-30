<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
      'title','description', 'project_id','perform_uid','priority'
    ];


    public function createdUser(){
        return $this->belongsTo('App\User','created_uid');
    }
    public function performUser(){
        return $this->belongsTo('App\User','perform_uid');
    }
    public function project(){
        return $this->belongsTo('App\Project','project_id');
    }


    protected $table = 'tasks';
}
