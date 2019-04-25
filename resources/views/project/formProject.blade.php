<div>
    {!! Form::label('title', 'Название:' )!!}
    {!! Form::text('title', null, ['class' => 'form-control'])  !!}
</div>

<!-- description form input-->
<div>
    {!! Form::label('description', 'Описание:') !!}
    {!! Form::text('description', null, ['class' => 'form-control'])  !!}
</div>

<!-- Добавить проект submit  form -->
<div>
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary'])  !!}
</div>
