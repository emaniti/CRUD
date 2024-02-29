{{-- 

@extends('backend.layout.app')
@section('custome_scripts_links')    
<script src="{{ asset('backend/js/plugins/validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('backend/js/plugins/validation/additional-methods.min.js') }}"></script>
@endsection
@section('page_content')
<div class="box box-bordered">
    <div class="box-title">
        <h3>
            <i class="fa fa-plus"></i>{{ isset($admin) ?  'Update Admin' :  'Add Admin'}} </h3>
    </div>
    <div class="box-content nopadding">
        <form action="{{ isset($admin) ? route('admin.update', $admin->id) : route('admin.store')  }}" method="POST" class='form-horizontal form-bordered form-validate' id="bb">
            @csrf
            @if (isset($admin))
                    @method('PUT')
                <input value="{{ $admin->id }}" name="user_id" type="hidden" >
            @endif
                <div class="form-group">
                    <label for="name" class="control-label col-sm-2">Name</label>
                    <div class="col-sm-10">
                        <input value="{{ isset($admin) ? $admin->name : '' }}" type="text" name="name" id="name"  placeholder="Admin Name" class="form-control" data-rule-required="true" data-rule-minlength="2" data-rule-maxlength="255">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label col-sm-2">Email</label>
                    <div class="col-sm-10">
                        <input value="{{ isset($admin) ? $admin->email : '' }}" type="email" name="email" id="email"  placeholder="Admin Email" class="form-control" data-rule-required="true" data-rule-minlength="2" data-rule-maxlength="255">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label col-sm-2">Password</label>
                    <div class="col-sm-10">
                        <input value="{{ isset($admin) ? $admin->password : '' }}" type="password" name="password" id="password"  placeholder="Admin Password" class="form-control" data-rule-required="true" data-rule-minlength="2" data-rule-maxlength="255">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label col-sm-2">Password confirmation</label>
                    <div class="col-sm-10">
                        <input value="{{ isset($admin) ? $admin->password : '' }}"  type="password" name="password_confirmation" id="password_confirmation"  placeholder="Password confirmation" class="form-control" data-rule-required="true" data-rule-minlength="2" data-rule-maxlength="255">
                    </div>
                </div>
            <div class="form-actions col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
 --}}
 @extends('backend.layout.form', [
    'action' => isset($admin) ? route('admin.update', $admin->id) : route('admin.store')  ,
    'method' => isset($admin) ? 'POST' : 'POST',
    'custome_method' => isset($admin) ? 'PUT' : '',
    'card_title' => isset($admin) ?  'Update Admin' :  'Add Admin'
    ])
@section('form_elements')
        @if (isset($admin))
            <input value="{{ $admin->id }}" name="user_id" type="hidden" >
        @endif
    <div class="fv-row mb-10">
        <label class="required fw-bold fs-6 mb-2">Name *</label>
        <input 
            type="text" 
            name="name" 
            class="form-control form-control-solid mb-3 mb-lg-0" 
            placeholder="Admin Name" 
            data-rule-required="true" data-rule-minlength="2" data-rule-maxlength="255"
            value="{{ isset($admin) ? $admin->name : '' }}" />
    </div>
    <div class="fv-row mb-10">
        <label class="required fw-bold fs-6 mb-2">Email *</label>
        <input 
            type="email" 
            name="email" 
            class="form-control form-control-solid mb-3 mb-lg-0" 
            placeholder="Admin Email" 
            data-rule-required="true" data-rule-minlength="2" data-rule-maxlength="255" 
            value="{{ isset($admin) ? $admin->email : '' }}" />
    </div>
    <div class="fv-row mb-10">
        <label class="required fw-bold fs-6 mb-2">Password *</label>
        <input 
            type="password" 
            name="password" 
            class="form-control form-control-solid mb-3 mb-lg-0" 
            placeholder="Admin password" 
            data-rule-required="true" data-rule-minlength="2" data-rule-maxlength="255"
            value="{{ isset($admin) ? $admin->password : '' }}" />
    </div>
    <div class="fv-row mb-10">
        <label class="required fw-bold fs-6 mb-2">Password confirmation*</label>
        <input 
            type="password" 
            name="password_confirmation" 
            class="form-control form-control-solid mb-3 mb-lg-0" 
            placeholder="Admin password confirmation" 
            data-rule-required="true" data-rule-minlength="2" data-rule-maxlength="255"
            value="{{ isset($admin) ? $admin->password : '' }}" />
    </div>
@endsection
@section('custome_script')
<script>
// Define form element
const form = document.getElementById('kt_docs_formvalidation_text');
// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
form,
{   
    fields: {
        'name': {
                validators: {
                    notEmpty: {
                        message: 'user name is required'
                    },
                    stringLength: {
                        max: 200,
                        message: 'user name must be less than 255 characters',
                    },
                    // regexp:{ 
                    //     regexp: /^[a-zA-Z0-9_]{5,}[a-zA-Z]+[0-9]*$/i,
                    //     message: 'user name can consist of spaces',
                    // },
                }
            },
            'email': {
                validators: {
                    stringLength: {
                        max: 200,
                        message: 'email must be less than 200 characters',
                    },
                    emailAddress: {
                        message: 'The value is not a valid email address',
                    },
                }
            },
            'password': {
                validators: {
                    notEmpty: {
                        message: 'password is required'
                    },
                    stringLength: {
                        max: 200,
                        message: 'password must be less than 255 characters',
                    },
                }
            },
            'password_confirmation': {
                validators: {
                    notEmpty: {
                        message: 'password confirmation is required'
                    },
                    stringLength: {
                        max: 200,
                        message: 'password confirmation must be less than 255 characters',
                    },
                }
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
</script>
@endsection