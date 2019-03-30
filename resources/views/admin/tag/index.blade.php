@extends('layouts.app')
@section('title', 'Tag Page')
@section('control')
  <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
  <li class="breadcrumb-item active">Tag</li>
@endsection
@section('content')
  <a href="{{ route('tag.create') }}" class="btn btn-outline-primary mb-4 btn-sm">Add New Tag</a>
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
      @foreach($tag as $tags)
        <tr class="table">
          <th scope="row">@php echo $i; $i++; @endphp</th>
          <td>{{ $tags -> name }}</td>
          <td>
            <a href="{{ route('tag.edit', $tags->id) }}" class="badge badge-warning">Update</a>
              <form action="{{ route('tag.destroy', $tags->id) }}" method="post">
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
