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