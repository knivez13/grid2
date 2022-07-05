@if (Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <span class="fw-bold">Well Done!</span> {{ Session::get('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (count($errors) > 0)
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <span class="fw-bold">Whoops!</span> There were some problems with your input.<br />
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif