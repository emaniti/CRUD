<div class="single-blog-item overlay-hover shadow rounded">
    <div class="single-blog-image">
        <div class="overlay-effect">
            <a  rel="noopener noreferrer" href="{{ auth()->user() && auth()->user()->account_updated ? $book->interactive_book_url : url('/book/'.$book->id) }}">
                <img src="{{ asset($book->book_cover) }}" alt="" >
            </a>
        </div>    
    </div>
    <div class="single-blog-text p-2">
        <h4> <a href="{{ auth()->user() && auth()->user()->account_updated ? $book->interactive_book_url : url('/book/'.$book->id) }}">{{$book->name}} </a></h4>
        {{-- {!! $book->book_description !!} --}}
        @if (!auth()->user())
            @if (!empty($book->book_pdf_summary))
            <a href="{{ url($book->book_pdf_summary) }}" target="_blank" rel="noopener noreferrer"><span class="badge badge-secondary p-2">PDF</span></a>
            @endif            
        @endif
    </div>
</div>