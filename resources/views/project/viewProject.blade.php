@extends('layouts.app')

@section('content')
    <div>
        <div>{{$project->title}}</div>
        <div>Системный номер</div>
        <div>{{$project->id}}</div>
        <div>Описание</div>
        <div>{{$project->description}}</div>

        <a href="/delete/project/{{$project->id}}">
            <span>
                Удалить
            </span>
        </a>
        @can('update', $project)
        <a href="/project/{{$project->id}}/edit">
            <span>
                Редактировать
            </span>
        </a>
        @endcan
    </div>

@endsection