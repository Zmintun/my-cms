@extends('layouts.user')

@section('title', 'Single Page')

@section('images')
    <div class="banner-1"></div>
@stop

@section('content')
    <div class="col-md-9 technology-left">
        <div class="agileinfo">
            <h2 class="w3">SINGLE PAGE</h2>
            <div class="single">
                <img src="{{ asset('images/'. $post->featured) }}" class="img-responsive" alt="" style="height: auto;
                 width: 100%;">
                <div class="b-bottom">
                    <h5 class="top">{{ $post->title }}</h5>
                    <p class="sub">{{ $post->content }}</p>
                    <p>{{ $post->created_at->diffForHumans() }}
                        @foreach($post->tags as $tag)
                            <span class="badge badge-success"> {{ $tag->name }}</span>
                        @endforeach
                        <span class="badge badge-success">{{ $post->category->name }}</span>
                    </p>
                </div>
            </div>


            <div class="response">
                <h4>Responses</h4>
                <div class="media response-info">
                    <div class="media-left response-text-left">
                        <a href="#">
                            <img src="{{ asset('images/sin1.jpg') }}" class="img-responsive" alt="">
                        </a>
                    </div>
                    <div class="media-body response-text-right">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <ul>
                            <li>Jun 21, 2016</li>
                            <li><a href="#">Reply</a></li>
                        </ul>
                        <div class="media response-info">
                            <div class="media-left response-text-left">
                                <a href="#">
                                    <img src="{{ asset('images/sin2.jpg') }}" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="media-body response-text-right">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <ul>
                                    <li>July 17, 2016</li>
                                    <li><a href="#">Reply</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="media response-info">
                    <div class="media-left response-text-left">
                        <a href="#">
                            <img src="{{ asset('images/sin1.jpg') }}" class="img-responsive" alt="">
                        </a>
                    </div>
                    <div class="media-body response-text-right">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <ul>
                            <li>Jul 22, 2016</li>
                            <li><a href="#">Reply</a></li>
                        </ul>
                        <div class="media response-info">
                            <div class="media-left response-text-left">
                                <a href="#">
                                    <img src="{{ asset('images/sin2.jpg') }}" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="media-body response-text-right">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <ul>
                                    <li>Aug 01, 2016</li>
                                    <li><a href="#">Reply</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="coment-form">
                <h4>Leave your comment</h4>
                <form action="#" method="post">
                    <input type="text" value="Name " name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                    <input type="email" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                    <textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
                    <input type="submit" value="Submit Comment">
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@stop