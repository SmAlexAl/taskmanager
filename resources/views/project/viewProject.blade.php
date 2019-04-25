@extends('layouts.app')

@section('content')
    <div>
        <div>{{$project->title}}</div>
        <div>Системный номер</div>
        <div>{{$project->id}}</div>
        <div>Описание</div>
        <div>{{$project->description}}</div>

        @can('update', $project)
            <a href="/project/{{$project->id}}/edit">
            <span class="btn btn-primary">
                Редактировать
            </span>
            </a>
        @endcan
        <a href="/project/{{$project->id}}/delete">
            <span>
                Удалить
            </span>
        </a>
    </div>

@endsection