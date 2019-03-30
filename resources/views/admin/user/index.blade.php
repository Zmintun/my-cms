@extends('layouts.app')
@section('title', 'User Page')
@section('control')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item active">User</li>
@endsection
@section('content')
    <a href="{{ route('user.c') }}" class="btn btn-outline-primary mb-4 btn-sm">Add New User</a>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Role</th>
            <th scope="col">Set Persmission</th>
        </tr>
        </thead>
        <tbody>
        @php $i = 1; @endphp
        @foreach($users as $user)
            <tr class="table">
                <th scope="row">@php echo $i; $i++; @endphp</th>
                <td>
                    <img src="{{ asset('profile/'. $user->profile->profile_image) }}" width="45"
                         style="border-radius: 50%">
                </td>
                <td>{{ $user -> name }}</td>
                <td>
                    @if($user->is_admin == 1)
                        Admin
                        @else
                        User
                    @endif
                </td>
                <td>
                    @if($user->is_admin == 0)
                        <a href="{{ route('user.edit.role', [1, $user->id]) }}" class="badge badge-warning">Change To
                            Admin</a>
                        @else
                        <a href="{{ route('user.edit.role', [0, $user->id]) }}" class="badge badge-success">Change To
                            User</a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
