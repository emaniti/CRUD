<div class="card card-custom my-2" >
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">{{ $slider->header }}</h3>
        </div>
        <div class="card-toolbar">
            <a class="btn btn btn-primary" href="{{ route('sliders.edit', $slider->id) }}"><i class="far fa-edit"></i> Edit </a>
            <form method="POST" action="{{ route('sliders.destroy', $slider->id) }}" class="delete_form">
                @method('DELETE')
                @csrf
                <button type="submit" class="mx-2 btn btn-danger delete_form">Delete</button>
            </form>
        </div>
    </div>
    <div class="card-body">
        <img class="img-fluid" src="{{ asset($slider->image) }}"/>
        <h5 class="mt-1">{{ $slider->title }}</h5>
        @if (!empty($slider->button_link))
            <a class="btn btn-primary" href="{{ url($slider->button_link) }}">{{ $slider->button_text }}</a>
        @endif
    </div>
</div>