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
            Roles
        </li>
    </ol>
</nav>
<div class="row">
    @include('usermanagement.usermanagement-nav')
    <div class="col-lg-8 col-md-7 mb-5">
        <h1 class="h2">Roles</h1>
        <div class="row mb-2">
            <div class="col-sm-7">
                <a href="{{ route('roles.create') }}" class="btn btn-outline-info btn-sm mb-2"><i class="fi-plus me-2"></i>Create</a>
            </div>
            <div class="col-sm-5">
                {!! Form::open(['route' => 'roles.index', 'method' => 'GET']) !!}
                <div class="input-group text-sm-end">
                    {!! Form::text('search', $search, ['class' => 'form-control form-control-sm mb-2 me-1' ,'placeholder'=>'Search...']) !!}
                    <button type="submit" class="btn btn-outline-info btn-sm mb-2 me-1">Search</button>
                </div>
                {!! Form::close() !!}
            </div><!-- end col-->
        </div>
        @include('usermanagement.roles.list')

    </div>

</div>
@endsection