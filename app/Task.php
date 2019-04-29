<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
      'title','description', 'project_id','perform_uid'
    ];




    protected $table = 'tasks';
}
