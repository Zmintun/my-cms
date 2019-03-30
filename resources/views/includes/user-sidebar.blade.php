<div class="blo-top1">
    <div class="tech-btm">
        <h4>Popular Posts </h4>
        @foreach($posts as $post)
        <div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
            <div class="blog-grid-left">
                <a href="s{{ route('post.detail', $post->slug) }}"><img src="{{ asset('images/'. $post->featured) }}" class="img-responsive" alt=""></a>
            </div>
            <div class="blog-grid-right">
                <h5>
                    <a href="{{ route('post.detail', $post->slug) }}">{{ $post->title }}</a> 
                </h5>
                <small>
                    @php
                        echo substr($post->content, 0,45);
                    @endphp
                </small>
            </div>
            <div class="clearfix"> </div>
        </div>
        @endforeach
        <div class="insta wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
            <h4>All Tag List</h4>
            @foreach($tags as $tag)
            <a href="{{ route('post.tag', $tag->slug) }}" class="badge badge-success">{{ $tag->name }}</a>
            @endforeach
        </div>
    </div>
</div>