@extends('layouts.app')
@section('title', 'Create Category')
@section('control')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item active">Create</li>
@endsection
@section('content')
    <a href="{{ route('category.index') }}" class="btn btn-outline-primary mb-4 btn-sm">Back</a>

    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <fieldset>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" name="category" class="form-control" id="category" placeholder="Enter Category"
                       autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary">Add Category</button>
        </fieldset>
    </form>
@endsection
