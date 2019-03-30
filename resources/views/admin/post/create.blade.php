@extends('layouts.app')
@section('title', 'Create Post')
@section('control')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item active">Create</li>
@endsection
@section('content')
    <a href="{{ route('post.index') }}" class="btn btn-outline-primary mb-4 btn-sm">Back</a>

    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <fieldset>
            <div class="form-group">
                <label for="title">Choose Category</label>
                <select class="form-control" name="category_id">
                    @foreach($category as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tags">Choose Tag</label>
                <div class="form-check">
                    @foreach($tag as $tags)
                    <label class="form-check-label"> {{ $tags->name }}
                        <input name="tags[]" type="checkbox" value="{{ $tags->id }}">
                    </label>
                    @endforeach
                </div>
            </div>
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter Post Title"
                       autocomplete="off">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" cols="150" rows="8"></textarea>
            </div>
            <div class="form-group">
                <label for="file">Choose Featured Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Add Post</button>
        </fieldset>
    </form>
@endsection
