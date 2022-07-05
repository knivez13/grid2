@extends('layouts.realstate')

@section('content')
<nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="/account/personal-info">Account</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            My Properties
        </li>
    </ol>
</nav>
<div class="row">
    @include('account.account-nav')

    <div class="col-lg-8 col-md-7 mb-5">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h1 class="h2 mb-0">My Properties</h1>
            <a class="fw-bold text-decoration-none" href="#">
                <i class="fi-trash mt-n1 me-2"></i>Delete all
            </a>
        </div>
        <p class="pt-1 mb-4">Here you can see your property offers and edit them easily.</p>
        <!-- Item-->
        @foreach ($list as $data)

        <div class="card card-hover card-horizontal border-0 shadow-sm mb-4">
            <a class="card-img-top" href="real-estate-single-v1.html" style="background-image: url('{{ asset('img/real-estate/catalog/08.jpg')}}')">
                <div class="position-absolute start-0 top-0 pt-3 ps-3">
                    <!-- <span class="d-table badge bg-info">New</span> -->
                </div>
            </a>
            <div class="card-body position-relative pb-3">
                <div class="dropdown position-absolute zindex-5 top-0 end-0 mt-3 me-3">
                    <button class="btn btn-icon btn-light btn-xs rounded-circle shadow-sm" type="button" id="contextMenu1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fi-dots-vertical"></i></button>
                    <ul class="dropdown-menu my-1" aria-labelledby="contextMenu1">
                        <li>
                            <button class="dropdown-item" type="button"><i class="fi-edit opacity-60 me-2"></i>Edit</button>
                        </li>
                        <li>
                            <button class="dropdown-item" type="button"><i class="fi-flame opacity-60 me-2"></i>Promote</button>
                        </li>
                        <li>
                            <button class="dropdown-item" type="button"><i class="fi-power opacity-60 me-2"></i>Deactivate</button>
                        </li>
                        <li>
                            <button class="dropdown-item" type="button"><i class="fi-trash opacity-60 me-2"></i>Delete</button>
                        </li>
                    </ul>
                </div>
                <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">{{$data->status->name}}</h4>
                <h3 class="h6 mb-2 fs-base">
                    <a class="nav-link stretched-link" href="real-estate-single-v1.html">{{$data->title}} | {{$data->lot_area}} sq.m
                    </a>
                </h3>
                <p class="mb-2 fs-sm text-muted">{{$data->address}}</p>
                <div class="fw-bold">
                    <i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$1,330
                </div>
                <div class="d-flex align-items-center justify-content-center justify-content-sm-start border-top pt-3 pb-2 mt-3 text-nowrap">
                    <span class="d-inline-block me-4 fs-sm">{{$data->number_of_bedroom}}
                        <i class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i>
                    </span>
                    <span class="d-inline-block me-4 fs-sm">{{$data->number_of_bathroom}}
                        <i class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i>
                    </span>
                    <span class="d-inline-block fs-sm">{{$data->number_of_parking}}
                        <i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i>
                    </span>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection