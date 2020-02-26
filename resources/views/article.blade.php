@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $article->title }}</h1>
    <h3>{{ $article->description }}</h3>
    <div>
        {!! $article->content !!}
    </div>
</div>
@endsection
