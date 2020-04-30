<div class="col-md-4" data-sticky_column>
    <div class="primary-sidebar">
        <aside class="widget news-letter">
            <h3 class="widget-title text-center">Get Newsletter</h3>
            <form action="/subscribe" method="post">
            {{csrf_field()}}
                <input type="email" name="email" placeholder="Your e-mail address">
                <input type="submit" value="Subscribe Now" class="text-center btn btn-subscribe">
            </form>
        </aside>
        <aside class="widget">
            <h3 class="widget-title text-center">Popular Posts</h3>
            @foreach($popularPosts as $post)
            <div class="popular-post">
                <a href="{{route('post.show', $post->slug)}}" class="popular-img"><img src="{{$post->getImage()}}" alt="">
                    <div class="p-overlay"></div>
                </a>
                <div class="p-content">
                    <a href="{{route('post.show', $post->slug)}}">{{$post->title}}</a>
                    <span class="p-date">{{$post->getDate()}}</span>
                </div>
            </div>
            @endforeach
        </aside>
        <aside class="widget">
            <h3 class="widget-title text-center">Featured Posts</h3>
            @foreach($featuredPosts as $post)
            <div id="widget-feature" class="owl-carousel">
                <div class="item">
                    <div class="feature-content">
                        <img src="{{$post->getImage()}}" alt="">
                        <a href="#" class="overlay-text text-center">
                            <h5>{{$post->title}}</h5>
                            <p>{!!$post->description!!}</p>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </aside>
        <aside class="widget pos-padding">
            <h3 class="widget-title text-center">Recent Posts</h3>
            @foreach($recentPosts as $post)
            <div class="thumb-latest-posts">
                <div class="media">
                    <div class="media-left">
                        <a href="{{route('post.show', $post->slug)}}" class="popular-img"><img src="{{$post->getImage()}}" alt="">
                            <div class="p-overlay"></div>
                        </a>
                    </div>
                    <div class="p-content">
                        <a href="{{route('post.show', $post->slug)}}">{{$post->title}}</a>
                        <span class="p-date">{{$post->getDate()}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </aside>
        <aside class="widget border pos-padding">
            <h3 class="widget-title text-center">Categories</h3>
            <ul>
                @foreach($categories as $category)
                <li>
                    <a href="{{route('category.show', $category->slug)}}">{{$category->title}}</a>
                    <span class="post-count pull-right"> ({{$category->posts()->count()}})</span>
                </li>
                @endforeach
            </ul>
        </aside>
    </div>
</div>