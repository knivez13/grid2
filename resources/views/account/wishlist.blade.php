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
            Wishlist
        </li>
    </ol>
</nav>
<div class="row">
    @include('account.account-nav')

    <div class="col-lg-8 col-md-7 mb-5">
        <div class="d-flex align-items-center justify-content-between mb-4 pb-2">
            <h1 class="h2 mb-0">Wishlist</h1>
            <a class="fw-bold text-decoration-none" href="#">
                <i class="fi-x fs-xs mt-n1 me-2"></i>Clear all
            </a>
        </div>
        <!-- Item-->
        <div class="card card-hover card-horizontal border-0 shadow-sm mb-4">
            <div class="card-img-top position-relative" style="background-image: url('{{ asset('img/real-estate/catalog/16.jpg')}}')">
                <a class="stretched-link" href="real-estate-single-v1.html"></a>
                <div class="position-absolute start-0 top-0 pt-3 ps-3">
                    <span class="d-table badge bg-success mb-1">Verified</span>
                    <span class="d-table badge bg-info">New</span>
                </div>
                <div class="position-absolute end-0 top-0 pt-3 pe-3 zindex-5">
                    <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle shadow-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Remove from Wishlist">
                        <i class="fi-heart-filled"></i>
                    </button>
                </div>
            </div>
            <div class="card-body position-relative pb-3">
                <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For sale</h4>
                <h3 class="h6 mb-2 fs-base">
                    <a class="nav-link stretched-link" href="real-estate-single-v1.html">3-bed Apartment | 67 sq.m
                    </a>
                </h3>
                <p class="mb-2 fs-sm text-muted">3811 Ditmars Blvd Astoria, NY 11105</p>
                <div class="fw-bold">
                    <i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$94,000
                </div>
                <div class="d-flex align-items-center justify-content-center justify-content-sm-start border-top pt-3 pb-2 mt-3 text-nowrap">
                    <span class="d-inline-block me-4 fs-sm">3
                        <i class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i>
                    </span>
                    <span class="d-inline-block me-4 fs-sm">2
                        <i class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i>
                    </span><span class="d-inline-block fs-sm">2
                        <i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i>
                    </span>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection