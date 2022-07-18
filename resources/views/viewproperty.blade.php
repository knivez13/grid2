@extends('layouts.realstate')

@section('content')
<!-- Breadcrumb-->
<nav class="mb-3 pt-md-3" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Property</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$data->title}}</li>
    </ol>
</nav>
<div class="row gy-5 pt-lg-2">
    <div class="col-lg-7">
        <div class="d-flex flex-column">
            <!-- Carousel with slides count-->
            <div class="order-lg-1 order-2">
                <div class="tns-carousel-wrapper">
                    <div class="tns-slides-count"><i class="fi-image fs-lg me-2"></i>
                        <div class="ps-1">
                            <span class="tns-current-slide fs-5 fw-bold"></span>
                            <span class="fs-5 fw-bold">/</span>
                            <span class="tns-total-slides fs-5 fw-bold"></span>
                        </div>
                    </div>
                    <div class="tns-carousel-inner" data-carousel-options="{&quot;navAsThumbnails&quot;: true, &quot;navContainer&quot;: &quot;#thumbnails&quot;, &quot;gutter&quot;: 12, &quot;responsive&quot;: {&quot;0&quot;:{&quot;controls&quot;: false},&quot;500&quot;:{&quot;controls&quot;: true}}}">
                        <div><img class="rounded-3" src="/upload/coverphoto/{{ $data->coverphoto }}" alt="Image"></div>
                        @foreach ($photo as $i)
                        <div><img class="rounded-3" src="/upload/housephoto/{{ $i->photo }}" alt="Image"></div>
                        @endforeach
                        <div>
                            <div class="ratio ratio-16x9">
                                <iframe class="rounded-3" src="/upload/housevideos/{{ $data->house_video }}" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <!-- <iframe class="embed-responsive-item" src="/upload/housevideos/{{ $data->house_video }}"></iframe> -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Thumbnails nav-->
                <ul class="tns-thumbnails mb-4" id="thumbnails">
                    <li class="tns-thumbnail"><img src="/upload/coverphoto/{{ $data->coverphoto }}" alt="Thumbnail"></li>
                    @foreach ($photo as $i)
                    <li class="tns-thumbnail"><img src="/upload/housephoto/{{ $i->photo }}" alt="Thumbnail"></li>
                    @endforeach
                    <li class="tns-thumbnail">
                        <div class="d-flex flex-column align-items-center justify-content-center h-100"><i class="fi-play-circle fs-4 mb-1"></i><span>Play video</span></div>
                    </li>
                </ul>
            </div>
            <!-- Page title + Features-->
            <div class="order-lg-2 order-1">
                <h1 class="h2 mb-2">{{$data->title}}</h1>
                <p class="mb-2 pb-1 fs-lg">{{$data->address.' '.$data->barangay.', '.$data->municipality .', '.$data->province}}</p>
                <ul class="d-flex mb-4 pb-lg-2 list-unstyled">
                    @if($data->number_of_bedroom)
                    <li class="me-3 pe-3 border-end">
                        <b class="me-1">{{$data->number_of_bedroom}}</b>
                        <i class="fi-bed mt-n1 lead align-middle text-muted"></i>
                    </li>
                    @endif

                    @if($data->number_of_bathroom)
                    <li class="me-3 pe-3 border-end">
                        <b class="me-1">{{$data->number_of_bathroom}}</b>
                        <i class="fi-bath mt-n1 lead align-middle text-muted"></i>
                    </li>
                    @endif

                    @if($data->number_of_parking)
                    <li class="me-3 pe-3 border-end">
                        <b class="me-1">{{$data->number_of_parking}}</b>
                        <i class="fi-car mt-n1 lead align-middle text-muted"></i>
                    </li>
                    @endif



                    <li><b>{{$data->lot_area}}</b>sq.m</li>
                </ul>
            </div>
        </div>
        <!-- Overview-->
        <h2 class="h5">Overview</h2>
        <p class="mb-4 pb-2">{{$data->description}}</p>

        <!-- Rental agent-->
        <h2 class="h5">Rental agent</h2>
        <div class="card card-horizontal">
            <div class="card-img-top bg-position-center-x" style="background-image: url('/upload/avatar/{{ $data->agent->picture }}');"></div>
            <blockquote class="blockquote card-body p-4">
                <p class="mb-4">{{$data->agent->bio}}</p>
                <footer class="d-flex justify-content-between">
                    <div class="pe-3">
                        <h6 class="mb-0">{{$data->agent->name}}</h6>
                        <div class="text-muted fw-normal fs-sm mb-3">{{$data->agent->company_name}}</div>
                        <a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="{{$data->agent->facebook}}">
                            <i class="fi-facebook"></i>
                        </a>
                        <a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="{{$data->agent->twitter}}">
                            <i class="fi-twitter"></i>
                        </a>
                        <a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="{{$data->agent->instagram}}">
                            <i class="fi-instagram"></i>
                        </a>
                        <a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="{{$data->agent->pinterest}}">
                            <i class="fi-pinterest"></i>
                        </a>
                        <a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="{{$data->agent->linkedin}}">
                            <i class="fi-linkedin"></i>
                        </a>
                    </div>

                </footer>
            </blockquote>
        </div>
    </div>
    <!-- Sidebar with details-->
    <aside class="col-lg-5">
        <div class="ps-lg-5">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div>
                    <span class="badge bg-info mb-1">{{$data->listingcategory->name}}</span>
                    <span class="badge bg-danger mb-1">{{$data->listingtype->name}}</span>
                    <span class="badge bg-primary mb-1">{{$data->propertytype->name}}</span>
                    <span class="badge bg-success">{{$data->deliveryunit->name}}</span>
                </div>
                <div class="text-nowrap">
                    <button class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mb-2" type="button" data-bs-toggle="tooltip" title="Add to Wishlist">
                        <i class="fi-heart"></i>
                    </button>
                    <div class="dropdown d-inline-block" data-bs-toggle="tooltip" title="Share">
                        <button class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mb-2" type="button" data-bs-toggle="dropdown">
                            <i class="fi-share"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end my-1">
                            <button class="dropdown-item" type="button">
                                <i class="fi-facebook fs-base opacity-75 me-2"></i>Facebook
                            </button>
                            <button class="dropdown-item" type="button">
                                <i class="fi-twitter fs-base opacity-75 me-2"></i>Twitter
                            </button>
                            <button class="dropdown-item" type="button">
                                <i class="fi-instagram fs-base opacity-75 me-2"></i>Instagram
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="h5 mb-2">Price</h3>
            <h2 class="h3 mb-4 pb-2">PHP {{$data->last_price}}<span class="d-inline-block ms-1 fs-base fw-normal text-body"></span></h2>
            <!-- Property details-->
            <div class="card border-0 bg-secondary mb-4">
                <div class="card-body">
                    <h5 class="mb-0 pb-3">Property Details</h5>
                    <ul class="list-unstyled mt-n2 mb-0">
                        <li class="mt-2 mb-0"><b>Price / Sqm: </b>{{$data->price_per_square}}</li>
                        <li class="mt-2 mb-0"><b>No. of units: </b>{{$data->number_of_unit}}</li>
                        <li class="mt-2 mb-0"><b>No. of rooms: </b>{{$data->number_of_room}}</li>
                        <li class="mt-2 mb-0"><b>No. of bedrooms: </b>{{$data->number_of_bedroom}}</li>
                        <li class="mt-2 mb-0"><b>No. of bathrooms: </b>{{$data->number_of_bathroom}}</li>
                        <li class="mt-2 mb-0"><b>No. of floor: </b>{{$data->number_of_floor}}</li>
                        <li class="mt-2 mb-0"><b>No. of kitchen: </b>{{$data->number_of_kitchen}}</li>
                        <li class="mt-2 mb-0"><b>No. of parking: </b>{{$data->number_of_parking}}</li>
                        <li class="mt-2 mb-0"><b>No. of maidrooms: </b>{{$data->number_of_maid_room}}</li>
                        <li class="mt-2 mb-0"><b>Title No.: </b>{{$data->title_number}}</li>
                        <li class="mt-2 mb-0"><b>Tax Dec. No.: </b>{{$data->tax_dec_number}}</li>
                    </ul>
                </div>
            </div>
            <!-- Amenities-->
            <div class="card border-0 bg-secondary mb-4">
                <div class="card-body">
                    <h5>Amenities</h5>
                    <ul class="list-unstyled row row-cols-md-2 row-cols-1 gy-2 mb-0 text-nowrap">
                        @foreach ($aminity as $i)
                        <li class="col"><i class="fi-star-filled mt-n1 me-2 fs-lg align-middle"></i>{{$i->aminity->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- Not included in rent-->
            <div class="card border-0 bg-secondary mb-4">
                <div class="card-body">
                    <h5>Near Location</h5>
                    <ul class="list-unstyled row row-cols-md-2 row-cols-1 gy-2 mb-0 text-nowrap">
                        @foreach ($nearlocation as $i)
                        <li class="col"><i class="fi-map-pin mt-n1 me-2 fs-lg align-middle"></i>{{$i->nearlocation->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <iframe class="responsive-iframe" width="100" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q={{$data->address.'+'.$data->barangay.'+'.$data->municipality .'+'.$data->province}}&t=&z=17   &ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </aside>
</div>
@endsection