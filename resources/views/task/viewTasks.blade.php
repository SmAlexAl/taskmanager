@extends('layouts.app')

@section('content')

    <div>
        <input type="text" name="text">
        <table>
            <tr>
                <th>Название</th>
                <th>Текст</th>
                <th>Описание</th>
                <th>Проект</th>
            </tr>
            @foreach($tasks as $task)
                <tr>
                    <td><a href="/view/task/{{$task->id}}">{{$task->title}}</a></td>
                    <td>{{$task->text}}</td>
                    <td>{{$task->description}}</td>
                    <td>{{$task->project->title}}</td>
                </tr>
            @endforeach
        </table>

        @if(!empty($id_project))<a href="/add/task?id_project={{$id_project}}">Добавить задачу</a>
        @else    <a href="/add/task">Добавить задачу</a>
            @endif
    </div>

@endsection