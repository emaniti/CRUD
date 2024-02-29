@extends('backend.components.page-card.card')
@section('card_label')
{{ $card_title }}
@endsection
@section('card_content')

<form id="kt_docs_formvalidation_text"
        class="form"
        action="{{$action}}"
        method="{{ $method }}"
        autocomplete="off"
        enctype="multipart/form-data"
        >
        @csrf
        @isset($custome_method)
            @method($custome_method)
        @endisset
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger mt-4">
                    <div class="mt-2">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            @yield('form_elements')
        </div>

        <div class="card-footer">
        <!--begin::Actions-->
        <button id="kt_docs_formvalidation_text_submit" type="submit" class="btn btn-primary">
            <span class="indicator-label">
                Save
            </span>
        </button>
        <!--end::Actions-->
        </div>

    </form>

@endsection
