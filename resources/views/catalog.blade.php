@extends('layouts.realstate')

@section('content')
<div class="container-fluid mt-5 pt-5 p-0">
    <div class="row g-0 mt-n3">
        <!-- Filters sidebar (Offcanvas on mobile)-->
        <aside class="col-lg-4 col-xl-3 border-top-lg border-end-lg shadow-sm px-3 px-xl-4 px-xxl-5 pt-lg-2">
            <form action="{{ route('catalog') }}" method="GET">
                <div class="offcanvas offcanvas-start offcanvas-collapse" id="filters-sidebar">
                    <div class="offcanvas-header d-flex d-lg-none align-items-center">
                        <h2 class="h5 mb-0">Filters</h2>
                        <button class="btn-close" type="button" data-bs-dismiss="offcanvas"></button>
                    </div>
                    <div class="offcanvas-header d-block border-bottom pt-0 pt-lg-4 px-lg-0">
                        <ul class="nav nav-tabs mb-0">
                            <li class="nav-item"><a class="nav-link active" href="#"><i class="fi-rent fs-base me-2"></i>For rent</a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fi-home fs-base me-2"></i>For sale</a></li>
                        </ul>
                    </div>
                    <div class="offcanvas-body py-lg-4">
                        <div class="pb-4 mb-2">
                            <h3 class="h6">Location</h3>
                            <input type="text" class="form-control" placeholder="Location Search" name="location" value="">
                        </div>
                        <div class="pb-4 mb-2">
                            <h3 class="h6">Property type</h3>
                            <div class="overflow-auto" data-simplebar data-simplebar-auto-hide="false" style="height: 11rem;">
                                @foreach ($propertytype as $data)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="propertytype[]" id="{{$data->name}}" value="{{$data->id}}">

                                    <label class="form-check-label fs-sm" for="{{$data->name}}">{{$data->name}}</label>
                                </div>
                                @endforeach
                            </div>
                        </div>


                        <!-- <div class="pb-4 mb-2">
                        <h3 class="h6">Price per month</h3>
                        <div class="range-slider" data-start-min="1100" data-start-max="3000" data-min="200" data-max="5000" data-step="100">
                            <div class="range-slider-ui"></div>
                            <div class="d-flex align-items-center">
                                <div class="w-50 pe-2">
                                    <div class="input-group"><span class="input-group-text fs-base">$</span>
                                        <input class="form-control range-slider-value-min" type="text">
                                    </div>
                                </div>
                                <div class="text-muted">&mdash;</div>
                                <div class="w-50 ps-2">
                                    <div class="input-group"><span class="input-group-text fs-base">$</span>
                                        <input class="form-control range-slider-value-max" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                        <!-- <div class="pb-4 mb-2">
                            <h3 class="h6 pt-1">Beds &amp; baths</h3>
                            <label class="d-block fs-sm mb-1">Bedrooms</label>
                            <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of bedrooms">
                                <input class="btn-check" type="radio" id="bedrooms-1" name="bedrooms">
                                <label class="btn btn-outline-secondary fw-normal" for="bedrooms-1">1</label>
                                <input class="btn-check" type="radio" id="bedrooms-2" name="bedrooms">
                                <label class="btn btn-outline-secondary fw-normal" for="bedrooms-2">2</label>
                                <input class="btn-check" type="radio" id="bedrooms-3" name="bedrooms">
                                <label class="btn btn-outline-secondary fw-normal" for="bedrooms-3">3</label>
                                <input class="btn-check" type="radio" id="bedrooms-4" name="bedrooms">
                                <label class="btn btn-outline-secondary fw-normal" for="bedrooms-4">4+</label>
                            </div>
                            <label class="d-block fs-sm pt-2 my-1">Bathrooms</label>
                            <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of bathrooms">
                                <input class="btn-check" type="radio" id="bathrooms-1" name="bathrooms">
                                <label class="btn btn-outline-secondary fw-normal" for="bathrooms-1">1</label>
                                <input class="btn-check" type="radio" id="bathrooms-2" name="bathrooms">
                                <label class="btn btn-outline-secondary fw-normal" for="bathrooms-2">2</label>
                                <input class="btn-check" type="radio" id="bathrooms-3" name="bathrooms">
                                <label class="btn btn-outline-secondary fw-normal" for="bathrooms-3">3</label>
                                <input class="btn-check" type="radio" id="bathrooms-4" name="bathrooms">
                                <label class="btn btn-outline-secondary fw-normal" for="bathrooms-4">4</label>
                            </div>
                        </div> -->
                        <!-- <div class="pb-4 mb-2">
                            <h3 class="h6 pt-1">Square metres</h3>
                            <div class="d-flex align-items-center">
                                <input class="form-control w-100" type="number" min="20" max="500" step="10" placeholder="Min">
                                <div class="mx-2">&mdash;</div>
                                <input class="form-control w-100" type="number" min="20" max="500" step="10" placeholder="Max">
                            </div>
                        </div> -->
                        <!-- <div class="pb-4 mb-2">
                            <h3 class="h6">Amenities</h3>
                            <div class="overflow-auto" data-simplebar data-simplebar-auto-hide="false" style="height: 11rem;">
                                @foreach ($aminity as $data)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="{{$data->name}}">
                                    <label class="form-check-label fs-sm" for="{{$data->name}}">{{$data->name}}</label>
                                </div>
                                @endforeach
                            </div>
                        </div> -->

                        <!-- <div class="pb-4 mb-2">
                            <h3 class="h6">Near Location</h3>
                            <div class="overflow-auto" data-simplebar data-simplebar-auto-hide="false" style="height: 11rem;">
                                @foreach ($nearlocation as $data)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="{{$data->name}}">
                                    <label class="form-check-label fs-sm" for="{{$data->name}}">{{$data->name}}</label>
                                </div>
                                @endforeach
                            </div>
                        </div> -->
                        <div class="pb-4 mb-2">
                            <h3 class="h6">Delivery Unit</h3>
                            <div class="overflow-auto" data-simplebar data-simplebar-auto-hide="false" style="height: 11rem;">
                                @foreach ($deliveryunit as $data)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="deliveryunit[]" id="{{$data->name}}" value="{{$data->id}}">
                                    <label class="form-check-label fs-sm" for="{{$data->name}}">{{$data->name}}</label>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="border-top py-4">
                            <button class="btn form-control btn-outline-success mb-2" type="submit"><i class="fi-search me-2"></i>Search</button>

                            <button class="btn form-control btn-outline-primary" type="submit"><i class="fi-rotate-right me-2"></i>Reset filters</button>
                        </div>
                    </div>
                </div>
            </form>
        </aside>
        <!-- Page content-->
        <div class="col-lg-8 col-xl-9 position-relative overflow-hidden pb-5 pt-4 px-3 px-xl-4 px-xxl-5">
            <!-- Map popup-->
            <div class="map-popup invisible" id="map">
                <button class="btn btn-icon btn-light btn-sm shadow-sm rounded-circle" type="button" data-bs-toggle-class="invisible" data-bs-target="#map"><i class="fi-x fs-xs"></i></button>
                <div class="interactive-map" data-map-options-json="json/map-options-real-estate-rent.json"></div>
            </div>
            <!-- Breadcrumb-->
            <nav class="mb-3 pt-md-2" aria-label="Breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Property for rent</li>
                </ol>
            </nav>
            <!-- Title-->
            <div class="d-sm-flex align-items-center justify-content-between pb-3 pb-sm-4">
                <h1 class="h2 mb-sm-0">Property for rent</h1><a class="d-inline-block fw-bold text-decoration-none py-1" href="#" data-bs-toggle-class="invisible" data-bs-target="#map"><i class="fi-map me-2"></i>Map view</a>
            </div>
            <!-- Sorting-->
            <!-- <div class="d-flex flex-sm-row flex-column align-items-sm-center align-items-stretch my-2">
                <div class="d-flex align-items-center flex-shrink-0">
                    <label class="fs-sm me-2 pe-1 text-nowrap" for="sortby"><i class="fi-arrows-sort text-muted mt-n1 me-2"></i>Sort by:</label>
                    <select class="form-select form-select-sm" id="sortby">
                        <option>Newest</option>
                        <option>Popularity</option>
                        <option>Low - High Price</option>
                        <option>High - Low Price</option>
                        <option>High rating</option>
                        <option>Average Rating</option>
                    </select>
                </div>
                <hr class="d-none d-sm-block w-100 mx-4">
                <div class="d-none d-sm-flex align-items-center flex-shrink-0 text-muted"><i class="fi-check-circle me-2"></i><span class="fs-sm mt-n1">148 results</span></div>
            </div> -->
            <!-- Catalog grid-->
            <div class="row g-4 py-4">
                <!-- Item-->
                @foreach ($list as $data)
                <div class="col-sm-6 col-xl-4">
                    <div class="card shadow-sm card-hover border-0 h-100">
                        <div class="tns-carousel-wrapper card-img-top card-img-hover">
                            <a class="img-overlay" href="{{ route('viewproperty', $data->title_slug) }}"></a>
                            <div class="position-absolute start-0 top-0 pt-3 ps-3">
                                <span class="d-table badge bg-info mb-1">{{$data->listingcategory->name}}</span>
                                <span class="d-table badge bg-danger mb-1">{{$data->listingtype->name}}</span>
                                <span class="d-table badge bg-primary mb-1">{{$data->propertytype->name}}</span>
                                <span class="d-table badge bg-success">{{$data->deliveryunit->name}}</span>
                            </div>
                            <div class="content-overlay end-0 top-0 pt-3 pe-3">
                                <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist">
                                    <i class="fi-heart"></i>
                                </button>
                            </div>
                            <div class="tns-carousel-inner">
                                <img class="img-fluid" src="/upload/coverphoto/{{ $data->coverphoto }}" style="height:170px ;" alt="Image">
                            </div>
                        </div>
                        <div class="card-body position-relative pb-3">
                            <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">{{$data->status->name}}</h4>
                            <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href="{{ route('viewproperty', $data->title_slug) }}">{{$data->title}} | {{$data->lot_area}} sq.m</a></h3>
                            <p class="mb-2 fs-sm text-muted">{{$data->address.' '.$data->barangay.', '.$data->municipality .', '.$data->province}}</p>
                            <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>{{$data->last_price}}</div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap">
                            @if($data->number_of_bedroom)
                            <span class="d-inline-block me-4 fs-sm">{{$data->number_of_bedroom}}
                                <i class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i>
                            </span>
                            @endif

                            @if($data->number_of_bathroom)
                            <span class="d-inline-block me-4 fs-sm">{{$data->number_of_bathroom}}
                                <i class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i>
                            </span>
                            @endif

                            @if($data->number_of_parking)
                            <span class="d-inline-block fs-sm">{{$data->number_of_parking}}
                                <i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Pagination-->
            {{ $list->withQueryString()->links() }}
            <!-- <nav class="border-top pb-md-4 pt-4 mt-2" aria-label="Pagination">
                <ul class="pagination mb-1">
                    <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
                    <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                    <li class="page-item d-none d-sm-block">...</li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">8</a></li>
                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><i class="fi-chevron-right"></i></a></li>
                </ul>
            </nav> -->
        </div>
    </div>
</div>
@endsection