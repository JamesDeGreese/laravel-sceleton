@extends('admin::layouts.admin')

<?php
    /**
     * @var \Components\Articles\Models\Article $model
     */
?>

@section('content')
    <h1>Edit Article "{{ $model->title }}"</h1>
    {!! Form::open(['route' => ['admin.articles.update', $model->id], 'method' => 'PUT']) !!}

        @include('admin::articles.form.main')

        {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}
@endsection


