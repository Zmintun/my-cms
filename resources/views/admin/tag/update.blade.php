@extends('layouts.app')
@section('title', 'Edit Tag')
@section('control')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item active">Update</li>
@endsection
@section('content')
    <a href="{{ route('tag.index') }}" class="btn btn-outline-primary mb-4 btn-sm">Back</a>

    <form action="{{ route('tag.update', $tag->id) }}" method="post">
        @csrf
        @method('PUT')
        <fieldset>
            <div class="form-group">
                <label for="category">Tag</label>
                <input type="text" name="name" class="form-control" id="category" placeholder="Enter Tag"
                       autocomplete="off" value="{{ $tag->name }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Tag</button>
        </fieldset>
    </form>
@endsection
