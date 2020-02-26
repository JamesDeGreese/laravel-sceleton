@extends('admin::layouts.admin')

@section('content')
    <h1>Create New Article</h1>
    {!! Form::open(['route' => 'admin.articles.store', 'method' => 'POST']) !!}

        @include('admin::articles.form.main')

        {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}
@endsection


