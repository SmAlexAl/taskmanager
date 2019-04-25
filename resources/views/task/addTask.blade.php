<!-- resources/views/tasks.blade.php -->

@extends('layouts.app')

@section('content')
    {!! Form::open(['url' => 'task']) !!}
    <!-- title form input-->
        @include('task.formTask')
        <!-- Добавить задачу submit  form -->
        <div>
            {!! Form::submit('Добавить задачу', ['class' => 'btn btn-primary'])  !!}
        </div>
        
        {!! Form::close() !!}
    </div>

    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>

        @endforeach
    </ul>

    <!-- TODO: Текущие задачи -->
@endsection