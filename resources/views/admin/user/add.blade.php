@extends('layouts.app')
@section('title', 'Create User')
@section('control')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item active">Create</li>
@endsection
@section('content')

    <form action="{{ route('user.storee') }}" method="post">
        @csrf
        <fieldset>
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Username"
                       autocomplete="off">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email"
                       autocomplete="off">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password"
                       autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary">Add User</button>
        </fieldset>
    </form>
@endsection
