@extends('layouts.user')

@section('title', 'Category Page')

@section('images')
    <div class="banner-1"></div>
@stop
@section('content')
    <div class="col-md-9 technology-left">
        <div class="tech-no">
        @foreach($posts as $post)
                <div class="wthree">
                    <div class="col-md-6 wthree-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="tch-img">
                            <a href="#">
                                <img src="{{ asset('images/'. $post->featured) }}" class="img-responsive" alt=""
                                     width="90%;">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 wthree-right wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                        <h3><a href="{{ route('post.detail', $post->slug) }}">{{ $post->title }}</a></h3>
                        @foreach($post->tags as $tag)
                            <span class="badge badge-success">{{ $tag->name }}</span>
                        @endforeach
                        <p>
                            @php
                                echo substr($post->content, 0,200);
                            @endphp
                        </p>
                        <div class="bht1">
                            <a href="{{ route('post.detail', $post->slug) }}">Read More</a>
                        </div>
                        <div class="soci">
                            <ul>

                                <li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                    <div class="clearfix"></div>
                </div>
            @endforeach
        </div>
    </div>
@stop