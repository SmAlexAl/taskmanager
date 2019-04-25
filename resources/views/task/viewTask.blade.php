@extends('layouts.app')

@section('content')
    <div>
        <div>{{$task->title}}</div>
        <div>Системный номер</div>
        <div>{{$task->id}}</div>
        <div>Описание</div>
        <div>{{$task->description}}</div>
        <a href="/delete/task/{{$task->id}}">
            <span>
                Удалить
            </span>
        </a>
        @if (Gate::allows('update-task', $task))
        <a href="/task/{{$task->id}}/edit">
            <span class="btn btn-primary">
                Редактировать
            </span>
        </a>
            <a href="/task/{{$task->id}}/edit">
            <span class="btn btn-primary">
                Редактировать
            </span>
            </a>
        @endif
    </div>

@endsection