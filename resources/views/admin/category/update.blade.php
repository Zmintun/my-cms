@extends('layouts.app')
@section('title', 'Edit Category')
@section('control')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item active">Update</li>
@endsection
@section('content')
    <a href="{{ route('category.index') }}" class="btn btn-outline-primary mb-4 btn-sm">Back</a>

    <form action="{{ route('category.update', $category->id) }}" method="post">
        @csrf
        @method('PUT')
        <fieldset>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" name="category" class="form-control" id="category" placeholder="Enter Category"
                       autocomplete="off" value="{{ $category->name }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Category</button>
        </fieldset>
    </form>
@endsection
