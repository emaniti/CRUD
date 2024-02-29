<div class="single-blog-item overlay-hover">
    <div class="single-blog-image">
        <div class="overlay-effect">
            <a href="/blog/{{$blog->id}}">
                <img src="{{ url($blog->image)}}" alt="" style="height: 300px;">
                <span class="class-date">{{ Carbon\Carbon::parse($blog->date_updated)->format('j F, Y')  }}</span>
            </a>
        </div>    
    </div>
    <div class="single-blog-text">
        <h4><a href="/blog/{{$blog->id}}">{{$blog->title}}</a></h4>
        <div class="blog-date">
            <span><i class="fa fa-calendar"></i>{{ Carbon\Carbon::parse($blog->date_updated)->format('j F, Y')  }}</span>
        </div>
        {!! \Illuminate\Support\Str::limit($blog->description, 150, $end='...') !!}
        <a href="/blog/{{$blog->id}}">Read more.</a>
    </div>
</div>