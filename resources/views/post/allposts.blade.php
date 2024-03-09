
@extends('layout.master')
@section('title',' | All Post')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Your content here -->
            <h1 class="text-center">Show All Posts</h1>
            <p class="text-center"><a href="{{ route('post.deleteAll') }}">Delete All</a></p>
            <p class="text-center"><a href="{{ route('post.deleteAllTruncate') }}">Delete All With Truncate</a></p>
            
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Processes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>
                        <td>
                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('post.delete', $post->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
