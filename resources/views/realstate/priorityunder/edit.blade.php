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
            Priority Under
        </li>
    </ol>
</nav>
<div class="row">
    @include('realstate.realstate-nav')
    <div class="col-lg-8 col-md-7 mb-5">
        <h1 class="h2">Priority Under Edit</h1>
        @include('components.alert')
        {!! Form::open(['route' => ['priority-under.update', $data->id], 'method' => 'PATCH',]) !!}
        <div class="mb-3 col-md-6">
            <div class="form-floating">
                {!! Form::text('name', $data->name, ['id' => 'floatingInputGrid', 'class' => 'form-control form-control-sm' , 'required']) !!}
                <label for="floatingInputGrid">Name<i style="color:red;">*</i></label>
            </div>
        </div>
        <div class="mb-3 col-md-6">
            <div class="form-floating">
                {!! Form::select('status', ['' => 'Select','1' => 'Active','0' => 'Inactive'] , $data->status, ['class' => 'form-control form-control-sm' ,'id' => 'floatingSelect','aria-label' => 'Floating label select example', 'required' ]) !!}
                <label for="floatingSelect">Status<i style="color:red;">*</i></label>
            </div>
        </div>

        <div class="mb-0 col-md-6">
            <button class="btn btn-outline-info btn-sm mb-2">Update</button>
            <a href="{{ route('priority-under.index') }}" class="btn btn-outline-danger btn-sm mb-2">Cancel</a>
        </div>
        {!! Form::close() !!}
    </div>

</div>
@endsection