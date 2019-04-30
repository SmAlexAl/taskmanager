<div class="form-group">
    {!! Form::label('title', 'title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control'])  !!}
</div>
<!-- description form input-->
<div class='form-group'>
    {!! Form::label('description', 'Описание задачи:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control'])  !!}
</div>
<!-- created_uid form input-->
<div class='form-group'>
    {!! Form::label('perform_uid', 'Ответственный:') !!}
    {!! Form::select('perform_uid', $users, null)  !!}
</div>
<!-- project_id form input-->
<div class='form-group'>
    {!! Form::label('project_id', 'Проект:') !!}
    {!! Form::select('project_id', $projects, $project)  !!}
</div>

<!-- deadline_at form input-->
<div class='form-group'>
    {!! Form::label('deadline_at', 'Срок выполнения:') !!}
    {!! Form::date('deadline_at', $task->deadline_at, ['class' => 'form-control'])  !!}
</div>

<!-- priority form input-->
<div class='form-group'>
    {!! Form::label('priority', 'Приоритет:') !!}
    {!! Form::select('priority', $priority, null, ['class' => 'form-control'])  !!}
</div>

