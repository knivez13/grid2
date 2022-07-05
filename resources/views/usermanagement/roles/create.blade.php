@extends('layouts.realstate')

@section('content')
<nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('welcome') }}">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('user.index') }}">User Management</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            Role Create
        </li>
    </ol>
</nav>
<div class="row">
    @include('usermanagement.usermanagement-nav')
    <div class="col-lg-8 col-md-7 mb-5">
        <h1 class="h2">Role Create</h1>
        @include('components.alert')
        {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}
        <div class="mb-3 col-md-4">
            <div class="form-floating">
                {!! Form::text('name', null, ['id' => 'floatingInputGrid', 'class' => 'form-control form-control-sm' , 'required']) !!}
                <label for="floatingInputGrid">Name<i style="color:red;">*</i></label>
            </div>
        </div>
        <ul class="mb-3 list-group">
            @foreach($permission as $value)
            <div class="form-check">
                {!! Form::checkbox('permission[]', $value->id, false, array('class' => 'form-check-input me-1','for'=>'form-check-{{$value->id}}')) !!}
                <label class="form-check-label" for="form-check-{{$value->id}}">{{ $value->name }}</label>
            </div>
            @endforeach
        </ul>

        <div class="mb-0 col-md-6">
            <button class="btn btn-outline-info btn-sm mb-2">Save</button>
            <a href="{{ route('roles.index') }}" class="btn btn-outline-danger btn-sm mb-2">Cancel</a>
        </div>
        {!! Form::close() !!}
    </div>

</div>
@endsection