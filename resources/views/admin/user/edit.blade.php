@extends('layouts.app')
@section('title', 'MyProfile')
@section('control')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item active">Update</li>
@endsection
@section('content')
    <form action="{{ url('admin/user/'.$user->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <fieldset>
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Username"
                       autocomplete="off" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email"
                       autocomplete="off" value="{{ $user->email }}">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password"
                       autocomplete="off">
            </div>
            <div class="form-group">
                <label for="facebook_link">Facebook</label>
                <input type="text" name="facebook_link" class="form-control" placeholder="Enter Facebook"
                       autocomplete="off" value="{{ $user->profile->facebook_link }}">
            </div>
            <div class="form-group">
                <label for="youtube_link">Youtube</label>
                <input type="text" name="youtube_link" class="form-control" placeholder="Enter Youtube"
                       autocomplete="off" value="{{ $user->profile->youtube_link }}">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control"> <br>
                <img src="{{ asset('profile/'.$user->profile->profile_image) }}">
            </div>
            <div class="form-group">
                <p>About</p>
                <textarea name="about" id="" cols="150" rows="8">{{ $user->profile->about }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </fieldset>
    </form>
@endsection
