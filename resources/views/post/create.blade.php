@extends('layout.master')
@section('title',' | Create Post')

@section('content')
    

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center">Create New Post</h1>
            <form action="{{ route('post.insert') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="Enter Your Title" value="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="body" placeholder="Enter Your Body" value="">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Create</button>
            </form>
        </div>
    </div>
</div>
@endsection