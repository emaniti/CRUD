@extends('backend.layout.form', [
        'action' => route('article.createTransferImage'),
        'method' => 'POST',
        'custome_method' =>  '',
        'card_title' => 'Transfer article images'
        ])
@section('form_elements')

            <div class="fv-row mb-10">
                <input value="{{ $article->id }}" name="id" type="hidden" class="img-responsive w-50" />

                <label class=" fw-bold fs-6 mb-2">Select Article to transfer images<span class="text-danger">*</span></label>
                <select class="form-control required" id="new_article_id" name="new_article_id" >
                    <option value="">--Select--</option>
                    @foreach ($Allarticles as $newArticle)
                            <option value="{{ $newArticle->id }}"> {{ $newArticle->title }}</option>
                    @endforeach
                </select>
            </div>

@endsection

