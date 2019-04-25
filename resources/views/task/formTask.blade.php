<div class="form-group">
    {!! Form::label('title', 'title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control'])  !!}
</div>
<!-- description form input-->
<div class='form-group'>
    {!! Form::label('description', 'Описание задачи:') !!}
    {!! Form::text('description', null, ['class' => 'form-control'])  !!}
</div>
<!-- created_uid form input-->
<div class='form-group'>
    {!! Form::label('perform_uid', 'Ответственный:') !!}
    {!! Form::select('perform_uid', $users)  !!}
</div>
<!-- project_id form input-->
<div class='form-group'>
    {!! Form::label('project_id', 'Проект:') !!}
    {!! Form::select('project_id', $projects)  !!}
</div>