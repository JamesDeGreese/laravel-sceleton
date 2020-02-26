@extends('admin::layouts.admin')

<?php
    /**
     * @var \Illuminate\Database\Eloquent\Collection $articles
     * @var \Components\Articles\Models\Article $article
     */
?>

@section('content')
    <h1>Articles</h1>
    <a class="btn btn-info mb-3" href="{{ route('admin.articles.create') }}">Add new article</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
        <tr>
            <th scope="row">{{ $article->id }}</th>
            <td>{{ $article->title }}</td>
            <td>{{ $article->created_at }}</td>
            <td>{{ $article->updated_at }}</td>
            <td>
                <a class="btn btn-secondary" href="{{ route('admin.articles.edit', $article->id) }}">Edit</a>
                <a class="btn btn-danger delete-button" href="#" data-model-id="{{ $article->id }}">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection


