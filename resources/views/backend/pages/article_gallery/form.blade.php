@extends('backend.layout.form', [
        'action' => route('articleImages.store'),
        'method' => 'POST',
        'custome_method' => '',
        'card_title' => 'Add More Gallery'
        ])
@section('form_elements')


            <div class="fv-row mb-10">
                <label class="required fw-bold fs-6 mb-2">Article<span class="text-danger">*</span></label>
                <select class="form-control required" id="article_id" name="article_id" >
                    <option value="">--Select--</option>
                    @foreach ($Allarticles as $article)
                            <option value="{{ $article->id }}"> {{ $article->title }}</option>
                    @endforeach
                </select>
            </div>




        <div class="fv-row mb-10">
            <label class="required fw-bold fs-6 mb-2">Extra images <span class="text-danger">(maximum 5 files)</span></label>
            <input
                type="file" id="extra_images"
                name="images[]"
                class="form-control form-control-solid mb-3 mb-lg-0" multiple
                data-rule-required="true" data-rule-accept="image/*"
                 />
        </div>

@endsection
@section('custome_script')
<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('dist/assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
<!--end::Page Scripts-->
<script>
var avatar1 = new KTImageInput('kt_image_1');
// Define form element
const form = document.getElementById('kt_docs_formvalidation_text');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form,
    {
        fields: {

            'article_id': {
                validators: {
                    notEmpty: {
                        message: 'Article Title is required'
                    },
                },

            },

                'images[]': {
                    validators: {
                        file: {
                                extension: 'jpeg,jpg,png',
                                type: 'image/jpeg,image/png',
                                maxSize: 2097152, // 2048 * 1024,
                                maxFiles :5,
                                message: 'The selected file is not valid or you exceed the limit count of files ',
                            },
                        },
                    },
            },
        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap({
                rowSelector: '.fv-row',
                eleInvalidClass: '',
                eleValidClass: ''
            })
        }
    }
);

// Submit button handler
const submitButton = document.getElementById('kt_docs_formvalidation_text_submit');
submitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (validator) {
        validator.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                console.log('valid');
                // Show loading indication
                submitButton.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                submitButton.disabled = true;
                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    // Remove loading indication
                    submitButton.removeAttribute('data-kt-indicator');
                    // Enable button
                    submitButton.disabled = false;
                    form.submit(); // Submit form
            } else {
                console.log('Not valid');
            }
        });
    }
});
//======================= for the richtext=============

var KTTinymce = function () {
    // Private functions
    var demos = function () {
        tinymce.init({
            selector: '#content',
            menubar: false,
            toolbar: ['styleselect fontselect fontsizeselect',
                'undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify',
                'bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code'],
            plugins : 'advlist autolink link image lists charmap print preview code'
        });
    }

    return {
        // public functions
        init: function() {
            demos();
        }
    };
}();

// Initialization
jQuery(document).ready(function() {
    KTTinymce.init();
});

</script>
@endsection
