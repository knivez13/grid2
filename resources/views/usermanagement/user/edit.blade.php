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
            User Edit
        </li>
    </ol>
</nav>
<div class="row">
    @include('usermanagement.usermanagement-nav')
    <div class="col-lg-8 col-md-7 mb-5">
        <h1 class="h2">User Edit</h1>
        @include('components.alert')
        {!! Form::open(['route' => ['user.update', $data->id], 'method' => 'PATCH',]) !!}
        <div class="row g-2">
            <div class="mb-3 col-md-6">
                <div class="form-floating">
                    {!! Form::text('name', $data->name, ['id' => 'floatingInputGrid', 'class' => 'form-control form-control-sm' , 'required']) !!}
                    <label for="floatingInputGrid">Name<i style="color:red;">*</i></label>
                </div>
            </div>
            <div class="mb-3 col-md-6">
                <div class="form-floating">
                    {!! Form::email('email', $data->email, ['id' => 'floatingInputGrid', 'class' => 'form-control form-control-sm' , 'required']) !!}
                    <label for="floatingInputGrid">Email<i style="color:red;">*</i></label>
                </div>
            </div>
        </div>
        <div class="row g-2">
            <div class="mb-3 col-md-6">
                <div class="form-floating">
                    {!! Form::text('address', $data->address, ['id' => 'floatingInputGrid', 'class' => 'form-control form-control-sm' ]) !!}
                    <label for="floatingInputGrid">Address</label>
                </div>
            </div>
            <div class="mb-3 col-md-6">
                <div class="form-floating">
                    {!! Form::text('contact_number', $data->contact_number, ['id' => 'floatingInputGrid', 'class' => 'form-control form-control-sm' ]) !!}
                    <label for="floatingInputGrid">Contact Number</label>
                </div>
            </div>
        </div>

        <div class="row g-2">
            <div class="mb-3 col-md-6">
                <div class="form-floating">
                    {!! Form::text('bank_details', $data->bank_details, ['id' => 'floatingInputGrid', 'class' => 'form-control form-control-sm' ]) !!}
                    <label for="floatingInputGrid">Bank Details</label>
                </div>
            </div>
            <div class="mb-3 col-md-6">
                <div class="form-floating">
                    {!! Form::text('crypto_wallet', $data->crypto_wallet, ['id' => 'floatingInputGrid', 'class' => 'form-control form-control-sm']) !!}
                    <label for="floatingInputGrid">Crypto Wallet</label>
                </div>
            </div>
        </div>

        <div class="row g-2">
            <div class="mb-3 col-md-6">
                <div class="form-floating">
                    {!! Form::select('role', $roles , $userRole, ['class' => 'form-control form-control-sm' ,'id' => 'floatingSelect','aria-label' => 'Floating label select example', 'required' ]) !!}
                    <label for="floatingSelect">Roles<i style="color:red;">*</i></label>
                </div>
            </div>
            <div class="mb-3 col-md-6">
                <div class="form-floating">
                    {!! Form::select('status', ['' => 'Select','1' => 'Active','0' => 'Inactive'] , $data->status, ['class' => 'form-control form-control-sm' ,'id' => 'floatingSelect','aria-label' => 'Floating label select example', 'required' ]) !!}
                    <label for="floatingSelect">Status<i style="color:red;">*</i></label>
                </div>
            </div>
        </div>

        <div class="pt-2">
            <label class="form-label fw-bold mb-3">Socials</label>
        </div>
        <div class="mb-3 col-md-12">
            <div class="form-floating">
                {!! Form::text('facebook', $data->facebook, ['id' => 'floatingInputGrid', 'class' => 'form-control form-control-sm' ]) !!}
                <label for="floatingInputGrid">Facebook Link</label>
            </div>
        </div>
        <div class="mb-3 col-md-12">
            <div class="form-floating">
                {!! Form::text('twitter', $data->twitter, ['id' => 'floatingInputGrid', 'class' => 'form-control form-control-sm' ]) !!}
                <label for="floatingInputGrid">Twitter Link</label>
            </div>
        </div>
        <div class="mb-3 col-md-12">
            <div class="form-floating">
                {!! Form::text('instagram', $data->instagram, ['id' => 'floatingInputGrid', 'class' => 'form-control form-control-sm' ]) !!}
                <label for="floatingInputGrid">Instagram</label>
            </div>
        </div>
        <div class="mb-3 col-md-12">
            <div class="form-floating">
                {!! Form::text('pinterest', $data->pinterest, ['id' => 'floatingInputGrid', 'class' => 'form-control form-control-sm' ]) !!}
                <label for="floatingInputGrid">Pinterest</label>
            </div>
        </div>
        <div class="mb-3 col-md-12">
            <div class="form-floating">
                {!! Form::text('linkedin', $data->linkedin, ['id' => 'floatingInputGrid', 'class' => 'form-control form-control-sm' ]) !!}
                <label for="floatingInputGrid">Linkedin</label>
            </div>
        </div>
        <div class="mb-0 col-md-6">
            <button class="btn btn-outline-info btn-sm mb-2">Update</button>
            <a href="{{ route('user.index') }}" class="btn btn-outline-danger btn-sm mb-2">Cancel</a>
        </div>
        {!! Form::close() !!}
    </div>

</div>
@endsection