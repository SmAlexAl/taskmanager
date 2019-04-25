@extends('layouts.app')


@section('content')
<h1>
    Редактировать проект
</h1>
{!! Form::model($project, ['url' => '/project/' . $project->id]) !!}

    @include('project.formProject', ['submitButtonText' => "Сохранить"])

    {!! Form::close() !!}
@endsection