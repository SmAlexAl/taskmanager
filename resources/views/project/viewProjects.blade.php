@extends("layouts.app")

@section('content')

        <a href="/project/add">
            <span class="btn btn-primary">
                Создать проект
            </span>
        </a>
        <table>
            <tr>
                <th>Системный номер</th>
                <th>Название</th>
                <th>Описание</th>
                <th>Создатель</th>
            </tr>
            @foreach($projects as $project)
                <tr>
                    <td>{{$project->id}}</td>
                    <td><a href="/project/{{$project->id}}">{{$project->title}}</a></td>
                    <td>{{$project->description}}</td>
                    <td>{{$project->user->name}}</td>
                </tr>
            @endforeach
        </table>
@endsection()