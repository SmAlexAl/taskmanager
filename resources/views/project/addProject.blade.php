@extends('layouts.app')

@section('content')

    <!-- Bootstrap шаблон... -->
<h1>Создать проект</h1>
{!! Form::open(['url' => 'project'])  !!}
    <!-- title form input-->

    @include('project.formProject', ['submitButtonText' => "Добавить проект"])
    {!! Form::close() !!}
    <!-- TODO: Текущие задачи -->

    {{--{{var_dump($error)}}--}}
@endsection

