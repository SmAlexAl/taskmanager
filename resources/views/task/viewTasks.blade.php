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
                <th>Ответственный</th>
                <th>Статус</th>
            </tr>
            @foreach($tasks as $task)
                <tr>
                    <td><a href="/view/task/{{$task->id}}">{{$task->title}}</a></td>
                    <td>{{$task->text}}</td>
                    <td>{{$task->description}}</td>
                    <td><a href="/project/{{$task->project->id}}">{{$task->project->title}}</a></td>
                </tr>
            @endforeach
        </table>

        @if(!empty($id_project))
            <a href="/task/add?id_project={{$id_project}}"><span class="btn btn-primary">Добавить задачу</span></a>
        @else
            <a href="/task/add"><span class="btn btn-primary">Добавить задачу</span></a>
        @endif
    </div>

@endsection