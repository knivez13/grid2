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
            Delivery Unit
        </li>
    </ol>
</nav>
<div class="row">
    @include('realstate.realstate-nav')
    <div class="col-lg-8 col-md-7 mb-5">
        <h1 class="h2">Delivery Unit</h1>
        <div class="row mb-2">
            <div class="col-sm-7">
                <a href="{{ route('delivery-unit.create') }}" class="btn btn-outline-info btn-sm mb-2"><i class="fi-plus me-2"></i>Create</a>
            </div>
            <div class="col-sm-5">
                {!! Form::open(['route' => 'delivery-unit.index', 'method' => 'GET']) !!}
                <div class="input-group text-sm-end">
                    {!! Form::text('search', $search, ['class' => 'form-control form-control-sm mb-2 me-1' ,'placeholder'=>'Search...']) !!}
                    <button type="submit" class="btn btn-outline-info btn-sm mb-2 me-1">Search</button>
                </div>
                {!! Form::close() !!}
            </div><!-- end col-->
        </div>
        @include('realstate.deliveryunit.list')
    </div>

</div>
@endsection