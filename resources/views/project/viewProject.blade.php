@extends('layouts.app')

@section('content')
    <div>
        <h1>{{$project->title}}</h1>
        <div>Системный номер</div>
        <div>{{$project->id}}</div>
        <div>Описание</div>
        <div>{{$project->description}}</div>
        <div>
            <div>
                Разработчики
            </div>
            <ul>
                @foreach($project->developers as $developer)
                    <li>{{$developer->name}}</li>
                @endforeach
            </ul>
        </div>
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
        <a href="{{url('/task/add?project=' . $project->id)}}">
        <span class="btn btn-primary">
            Добавить задачу
        </span>
        </a>
    </div>

@endsection