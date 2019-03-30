@extends('layouts.app')
@section('title', 'All Post')
@section('control')
  <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
  <li class="breadcrumb-item active">Post</li>
@endsection
@section('content')
  <a href="{{ route('post.create') }}" class="btn btn-outline-primary mb-4 btn-sm">Add New Post</a>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      @php $i = 1; @endphp
      @foreach($posts as $post)
        <tr class="table">
          <th scope="row">@php echo $i; $i++; @endphp</th>
          <td>{{ $post -> title }}</td>
          <td>
            <a href="{{ route('post.edit', $post->id) }}" class="badge badge-warning">Update</a>
            <a href="{{ route('post.show', $post->id) }}" class="badge badge-success">View</a>
              <form action="{{ route('post.destroy', $post->id) }}" method="post">
                  @csrf
                  {{ method_field('DELETE') }}
                  <button type="submit" class="badge badge-danger">Delete</button>
              </form>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
@endsection
