<!-- resources/views/edit.blade.php -->

@extends('layouts.app')

@section('content')

    <!-- Bootstrap шаблон... -->

    <div class="panel-body">
    {!! Form::model($task, ['method' => 'POST', 'action' => ['Task\AddTaskController@update', $task->id]]) !!}
    <!-- title form input-->
        @include('task.formTask')
        <!-- Добавить задачу submit  form -->
        <div>
            {!! Form::submit('Сохранить задачу', ['class' => 'btn btn-primary'])  !!}
        </div>

        {!! Form::close() !!}
    </div>

    <!-- TODO: Текущие задачи -->
@endsection