@extends('backend.layout.datatable', [
        'card_title' => 'Articles'
])
@section('card_actions')
<!--begin::Button-->
<a href="{{ route('articleImages.create') }}" class="btn btn-primary font-weight-bolder">
    <span class="svg-icon svg-icon-md">
        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <rect x="0" y="0" width="24" height="24" />
                <circle fill="#000000" cx="9" cy="15" r="6" />
                <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
            </g>
        </svg>
        <!--end::Svg Icon-->
    </span>Add Extra Images</a>
    <!--end::Button-->
@endsection
@section('table_content')
<table class="table table-bordered table-checkable"
id="kt_datatable_books"
>
    <thead>
        <tr>
            <th>Article</th>
            <th>Image</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @if ($articles_images->count() > 0)
        @foreach ($articles_images as $image)
        <tr>
            <td>{{ $image->article->title }}</td>
            <td><img class="img-fluid" src="{{ asset($image->image_name) }}" /></td>
            <td>
                <form action="{{route('articleImages.destroy',$image->id )}}" method="post" onsubmit="return confirm('Are You Sure You want to delete this image')">
                @csrf
                @method('DELETE')
                  <input type="hidden" value="{{ $image->id }}" name="id">
                  <button class="btn btn-danger"> <i class="fa fa-trash-o"></i> Delete </button>
                </form>
            </td>
        </tr>
    @endforeach

            @else
            <h2 class="text-center text-danger" > There is no images Please Add </h2>
        @endif
    </tbody>
</table>
{{  $articles_images->links() }}
@endsection
