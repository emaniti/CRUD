<div class="single-blog-item overlay-hover border-0 series-hover">
    <div class="single-blog-image">
        <div class="overlay-effect">
            <a href="/series/{{$series->id}}">
                <img src="{{ url($series->series_image)}}" class="w-100 "  alt="">
            </a>
        </div>    
    </div>
    <div class="single-blog-text px-2">
        <h4 ><a class="d-block w-100" href="/series/{{$series->id}}">{{$series->series_name}}</a></h4>
        {!! $series->series_description !!}
    </div>
</div>