<nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
        <nav class="link-effect-7" id="link-effect-7">
            <ul class="nav navbar-nav">
                <li class="active act"><a href="/">Home</a></li>
                @foreach($categories as $category)
                    <li><a href="{{ route('post.category', $category->slug) }}">{{ $category->name
                    }}</a></li>
                @endforeach
                <li class=" act"><a href="{{ route('about') }}">About</a></li>
                <li class=" act"><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </div>
    <!-- /.navbar-collapse -->
</nav>