@extends('layouts.user')

@section('title', 'Home Page')

@section('images')
    <div class="banner">
        <div class="container">
            <h2>Contrary to popular belief, Lorem Ipsum simply</h2>
            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <a href="#">READ MORE</a>
        </div>
    </div>
    <div class="services w3l wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
        <div class="container">
            <div class="grid_3 grid_5">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">FASHION</a></li>
                        <li role="presentation" class=""><a href="#safari" role="tab" id="safari-tab" data-toggle="tab" aria-controls="safari">TRAVEL</a></li>
                        <li role="presentation" class=""><a href="#trekking" role="tab" id="trekking-tab" data-toggle="tab" aria-controls="trekking">MUSIC</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade" id="expeditions" aria-labelledby="expeditions-tab">

                            <div class="col-md-4 col-sm-5 tab-image">
                                <img src="{{ asset('images/f2.jpg') }}" class="img-responsive" alt="Wanderer">
                            </div>
                            <div class="col-md-4 col-sm-5 tab-image">
                                <img src="{{ asset('images/f4.jpg') }}" class="img-responsive" alt="Wanderer">
                            </div>
                            <div class="col-md-4 col-sm-5 tab-image">
                                <img src="{{ asset('images/f3.jpg') }}" class="img-responsive" alt="Wanderer">
                            </div>
                            <div class="clearfix"></div>
                        </div>


                        <div role="tabpanel" class="tab-pane fade" id="safari" aria-labelledby="safari-tab">
                            <div class="col-md-4 col-sm-5 tab-image">
                                <img src="{{ asset('images/t1.jpg') }}" class="img-responsive" alt="Wanderer">
                            </div>
                            <div class="col-md-4 col-sm-5 tab-image">
                                <img src="{{ asset('images/t2.jpg') }}" class="img-responsive" alt="Wanderer">
                            </div>
                            <div class="col-md-4 col-sm-5 tab-image">
                                <img src="{{ asset('images/t3.jpg') }}" class="img-responsive" alt="Wanderer">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade active in" id="trekking" aria-labelledby="trekking-tab">

                            <div class="col-md-4 col-sm-5 tab-image">
                                <img src="{{ asset('images/m2.jpg') }}" class="img-responsive" alt="Wanderer">
                            </div>
                            <div class="col-md-4 col-sm-5 tab-image">
                                <img src="{{ asset('images/m1.jpg') }}" class="img-responsive" alt="Wanderer">
                            </div>
                            <div class="col-md-4 col-sm-5 tab-image">
                                <img src="{{ asset('images/m3.jpg') }}" class="img-responsive" alt="Wanderer">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('content')
    <div class="col-md-9 technology-left">
        <div class="tech-no">
            <!-- technology-top -->
            <div class="clearfix"></div>
            <!-- technology-top -->
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