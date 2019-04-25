@extends('layouts.app')


@section('content')
<h1>
    Редактировать проект
</h1>
{!! Form::model($project, ['method' => 'POST', 'action' => ['Project\ProjectController@update', $project->id]]) !!}

    @include('project.formProject', ['submitButtonText' => "Сохранить"])

    {!! Form::close() !!}
@endsection