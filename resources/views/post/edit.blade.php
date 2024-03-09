@extends('layout.master')
@section('title',' | Edit Post')

@section('content')
    
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center">Edit Post Number = {{ $post->id }}</h1>
            <form action="{{ route('post.update', $post->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="body">Body:</label>
                    <input type="text" class="form-control" id="body" name="body" value="{{ $post->body }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection