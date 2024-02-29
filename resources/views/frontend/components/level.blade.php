<div class="single-blog-item overlay-hover">
    <div class="single-blog-image">
        <div class="overlay-effect">
            <a href="/level/{{$level->id}}">
                <img src="{{ url($level->level_image)}}" alt="" >
            </a>
        </div>    
    </div>
    <div class="single-blog-text">
        <h4><a href="/level/{{$level->id}}">{{$level->name}}</a></h4>
        {!! $level->series_description !!}
        <div class="w-100 mt-2">
            @if (!empty($level->level_pdf_link))
                <a href="{{ url($level->level_pdf_link) }}" target="_blank" rel="noopener noreferrer"><span class="badge badge-secondary p-2">PDF</span></a>
            @endif
        </div>
    </div>
</div>