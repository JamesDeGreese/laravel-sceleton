<?php
/**
 * @var array $categoriesList
 */
?>

<div class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', $model->title ?? '', ['class' => 'form-control']) !!}
    @if($errors->first('title'))
        <span class="text-danger">{{ $errors->first('title') }}</span>
    @endif
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Category') !!}
    {!! Form::select('category_id', $categoriesList, $model->category_id ?? '', ['class' => 'form-control']) !!}
    @if($errors->first('category_id'))
        <span class="text-danger">{{ $errors->first('category_id') }}</span>
    @endif
</div>

<div class="form-group">
    {!! Form::label('description', 'Description') !!}
    {!! Form::text('description', $model->description ?? '', ['class' => 'form-control']) !!}
    @if($errors->first('description'))
        <span class="text-danger">{{ $errors->first('description') }}</span>
    @endif
</div>

<div class="form-group">
    {!! Form::label('content', 'Content') !!}
    {!! Form::textarea('content', $model->content ?? '', ['class' => 'form-control', 'id' => 'ck-editor']) !!}
    @if($errors->first('content'))
        <span class="text-danger">{{ $errors->first('content') }}</span>
    @endif
</div>
