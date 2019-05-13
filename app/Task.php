<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
      'title','description', 'project_id','perform_uid','priority','deadline_at'
    ];

    protected $dates = ['deadline_at'];


    public function createdUser(){
        return $this->belongsTo('App\User','created_uid');
    }
    public function performUser(){
        return $this->belongsTo('App\User','perform_uid');
    }
    public function project(){
        return $this->belongsTo('App\Project','project_id');
    }


    public function getPriorityAttribute($key){
        $priority = ['0' => 'Низкий', '1' => 'Высокий', '2' => 'Сделать в первую очередь'];

        return $priority[$key];
    }
    public function getStatusAttribute($key){
        $status = ['0' => 'Не выполнена', '1' => 'Выполнена', '2' => 'Выполняется', '3' => 'Пауза'];

        return $status[$key];
    }

    public function setDeadlineAtAttribute($date)
    {
        $this->attributes['deadline_at'] = Carbon::parse($date);
    }

    public function getDeadlineAtAttribute( $date){
        return Carbon::create($date)->format('d.m.Y'); //добавить часы минуты
    }

//    public function getDeadlineAtAttribute($date)
//    {
//        return Carbon::createFromFormat('Y-m-d', $date)->format('d.m.Y');
//    }

    protected $table = 'tasks';
}
