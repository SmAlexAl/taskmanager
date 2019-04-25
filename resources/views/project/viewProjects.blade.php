@extends("layouts.app")

@section('content')
        <table>
            <tr>
                <th>Название</th>
                <th>Описание</th>
            </tr>
            @foreach($projects as $project)
                <tr>
                    <td><a href="/project/{{$project->id}}">{{$project->title}}</a></td>
                    <td>{{$project->description}}</td>
                </tr>
            @endforeach
        </table>
@endsection()