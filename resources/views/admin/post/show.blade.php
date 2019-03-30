@extends('layouts.app')
@section('title', 'View Post')
@section('control')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item active">View</li>
@endsection
@section('content')
    <a href="{{ route('post.create') }}" class="btn btn-outline-primary mb-4 btn-sm">Add New Post</a>
    <a href="{{ route('post.index') }}" class="btn btn-outline-primary mb-4 btn-sm">View All Post</a>
    <p>Title : {{$post->title}}</p>
    <p>Category : {{$post->category->name}}</p>
    <p>Description : {{$post->content}}</p>
    <img src="{{ asset('images/'.$post->featured) }}" style="width: 300px;">
@endsection
