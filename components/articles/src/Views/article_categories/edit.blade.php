@extends('admin::layouts.admin')

<?php
    /**
     * @var \Components\Articles\Models\ArticleCategory $model
     */
?>

@section('content')
    <h1>Edit Article Category "{{ $model->title }}"</h1>
    {!! Form::open(['route' => ['admin.article_categories.update', $model->id], 'method' => 'PUT']) !!}

        @include('admin::article_categories.form.main')

        {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}
@endsection


