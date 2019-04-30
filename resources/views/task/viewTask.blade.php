@extends('layouts.app')

@section('content')
    <div>
        <h1>{{$task->title}}</h1>
        <h4>{{$priority}}</h4>
        <div>Системный номер</div>
        <div>{{$task->id}}</div>
        <div>Описание</div>
        <div>{{$task->description}}</div>
        <div>
        <span>Ответственный</span>
        <span>{{$task->performUser->name}}</span>
        </div>
        @can('update', $task)
            <a href="/task/{{$task->id}}/edit">
            <span class="btn btn-primary">
                Редактировать
            </span>
            </a>
        @endcan
        @can('delete', $task)
        <a href="/delete/task/{{$task->id}}">
            <span>
                Удалить
            </span>
        </a>
        @endcan
    </div>

@endsection