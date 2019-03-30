@extends('layouts.app')
@section('title', 'Dashboard Page')
@section('control')
    <li class="breadcrumb-item active">Home</li>
@endsection
@section('content')

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">Posts</div>
                <div class="card-body">
                    <h5 class="text-bold-400 mb-0">Posts<i class="ft-plus"></i> {{ $postCount }}</h5>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">Cagetory</div>
                <div class="card-body">
                    <h5 class="text-bold-400 mb-0">Cagetory<i class="ft-plus"></i> {{ $categoryCount }}</h5>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">Tags</div>
                <div class="card-body">
                    <h5 class="text-bold-400 mb-0">Tags<i class="ft-plus"></i> {{ $tagCount }}</h5>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">User</div>
                <div class="card-body">
                    <h5 class="text-bold-400 mb-0">User<i class="ft-plus"></i> {{ $userCount }}</h5>
                </div>
            </div>
        </div>

    </div>

@endsection
