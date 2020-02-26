@extends('admin::layouts.admin')

<?php
    /**
     * @var \Illuminate\Database\Eloquent\Collection $articleCategories
     * @var \Components\Articles\Models\ArticleCategory $articleCategory
     */
?>

@section('content')
    <h1>Article Categories</h1>
    <a class="btn btn-info mb-3" href="{{ route('admin.article_categories.create') }}">Add new category</a>
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
        @foreach($articleCategories as $articleCategory)
        <tr>
            <th scope="row">{{ $articleCategory->id }}</th>
            <td>{{ $articleCategory->title }}</td>
            <td>{{ $articleCategory->created_at }}</td>
            <td>{{ $articleCategory->updated_at }}</td>
            <td>
                <a class="btn btn-secondary" href="{{ route('admin.article_categories.edit', $articleCategory->id) }}">Edit</a>
                <a class="btn btn-danger delete-button" href="#" data-model-id="{{ $articleCategory->id }}">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection


