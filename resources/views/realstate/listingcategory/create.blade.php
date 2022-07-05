@extends('layouts.realstate')

@section('content')
<nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('welcome') }}">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('aminity.index') }}">Real State</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            Listing Category
        </li>
    </ol>
</nav>
<div class="row">
    @include('realstate.realstate-nav')
    <div class="col-lg-8 col-md-7 mb-5">
        <h1 class="h2">Listing Category Create</h1>
        @include('components.alert')
        {!! Form::open(['route' => 'listing-category.store', 'method' => 'POST']) !!}
        <div class="mb-3 col-md-6">
            <div class="form-floating">
                {!! Form::text('name', null, ['id' => 'floatingInputGrid', 'class' => 'form-control form-control-sm' , 'required']) !!}
                <label for="floatingInputGrid">Name<i style="color:red;">*</i></label>
            </div>
        </div>
        <div class="mb-3 col-md-6">
            <div class="form-floating">
                {!! Form::select('status', ['' => 'Select','1' => 'Active','0' => 'Inactive'] , null, ['class' => 'form-control form-control-sm' ,'id' => 'floatingSelect','aria-label' => 'Floating label select example', 'required' ]) !!}
                <label for="floatingSelect">Status<i style="color:red;">*</i></label>
            </div>
        </div>

        <div class="mb-0 col-md-6">
            <button class="btn btn-outline-info btn-sm mb-2">Save</button>
            <a href="{{ route('listing-category.index') }}" class="btn btn-outline-danger btn-sm mb-2">Cancel</a>
        </div>
        {!! Form::close() !!}
    </div>

</div>
@endsection