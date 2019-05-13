@extends('layouts.app')

@section('content')
    <div>
        <h1>{{$project->title}}</h1>

        <div>{{$project->description}}</div>
        <div>
            <div>
                Разработчики
            </div>
            <ul>
                @foreach($project->developers as $developer)
                    <li><a href="{{url('/user/' . $developer->id)}}">{{$developer->name}}</a></li>
                @endforeach
            </ul>
        </div>
        <div>
            <table class="table table-condensed">
                <tr>
                    <th>Задача</th>
                    <th>Выполнить до</th>
                    <th>Приоритет</th>
                    <th>Статус</th>
                    <th>Поставил</th>
                    <th>Ответственный</th>
                </tr>
                @foreach($project->tasks as $task)
                        <tr>
                            <td><a href="{{url('/task/' . $task->id)}}">{{$task->title}}</a></td>
                            <td>{{$task->name}}</td>
                            <td>{{$task->prioritet}}</td>
                            <td>{{$task->status}}</td>
                            <td><a href="{{url('/user/' . $task->createdUser->id)}}">{{$task->createdUser->name}}</a></td>
                            <td><a href="{{url('/user/' . $task->performUser->id)}}">{{$task->performUser->name}}</a></td>
                        </tr>
                @endforeach

            </table>
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