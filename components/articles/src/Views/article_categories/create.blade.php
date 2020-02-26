@extends('admin::layouts.admin')

@section('content')
    <h1>Create New Article Category</h1>
    {!! Form::open(['route' => 'admin.article_categories.store', 'method' => 'POST']) !!}

        @include('admin::article_categories.form.main')

        {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}
@endsection


