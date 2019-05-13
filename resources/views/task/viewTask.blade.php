@extends('layouts.app')

@section('content')
    <div>
        <h1>{{$task->title}}</h1>

        <div>
            <p>Задача {{$task->id}} - {{$task->status}} (приоритет: {{$task->priority}})</p>
        </div>
        <div>
            <p>Выполнить до: {{$task->deadline_at}}</p>
        </div>
        <div>
            <p>Поставлена: {{$task->created_at}}</p>
        </div>
        <div>
            <p>{{$task->description}}</p>
        </div>
        <div>
            <span>Ответственный:</span> <span>{{$task->performUser->name}}</span>
        </div>

        <div>
            <p>Постановщик: {{$task->createdUser->name}}</p>
        </div>

        <div>

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