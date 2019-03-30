@extends('layouts.app')
@section('title', 'Create Teg')
@section('control')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item active">Create</li>
@endsection
@section('content')
    <a href="{{ route('tag.index') }}" class="btn btn-outline-primary mb-4 btn-sm">Back</a>

    <form action="{{ route('tag.store') }}" method="post">
        @csrf
        <fieldset>
            <div class="form-group">
                <label for="category">Tag</label>
                <input type="text" name="name" class="form-control" id="category" placeholder="Enter Tag"
                       autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary">Add Tag</button>
        </fieldset>
    </form>
@endsection
