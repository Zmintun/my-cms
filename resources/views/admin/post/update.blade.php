@extends('layouts.app')
@section('title', 'Edit Post')
@section('control')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item active">Update</li>
@endsection
@section('content')
    <a href="{{ route('post.index') }}" class="btn btn-outline-primary mb-4 btn-sm">Back</a>

    <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <fieldset>
            <div class="form-group">
                <label for="title">Choose Category</label>
                <select class="form-control" name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" @if($category->id == $post->id) selected @endif>{{ $category->name
                        }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tags">Choose Tag</label>
                <div class="form-check">
                    @foreach($tags as $t)
                        <label class="form-check-label"> {{ $t->name }}
                            <input name="tags[]" type="checkbox" value="{{ $t->id }}"
                                @foreach($post->tags as $tag)
                                    @if($tag->id == $t->id)
                                        checked
                                    @endif
                                @endforeach
                            >
                        </label>
                    @endforeach
                </div>
            </div>
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" name="title" value="{{ $post-> title }}" class="form-control" placeholder="Enter
                Post
                Title"
                       autocomplete="off">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" cols="150" rows="7">{{ $post->content }}</textarea>
            </div>
            <div class="form-group">
                <label for="file">Choose Featured Image</label>
                <input type="file" name="image" class="form-control">
                <br>
                <img src="{{ asset('images/' . $post->featured) }}" style="width: 40%; border-radius: 5px;">
            </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
        </fieldset>
    </form>
@endsection
