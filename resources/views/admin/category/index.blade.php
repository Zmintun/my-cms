@extends('layouts.app')
@section('title', 'Category Page')
@section('control')
  <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
  <li class="breadcrumb-item active">Category</li>
@endsection
@section('content')
  <a href="{{ route('category.create') }}" class="btn btn-outline-primary mb-4 btn-sm">Add New Category</a>
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
      @foreach($categories as $category)
        <tr class="table">
          <th scope="row">@php echo $i; $i++; @endphp</th>
          <td>{{ $category -> name }}</td>
          <td>
            <a href="{{ route('category.edit', $category->id) }}" class="badge badge-warning">Update</a>
              <form action="{{ route('category.destroy', $category->id) }}" method="post">
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
