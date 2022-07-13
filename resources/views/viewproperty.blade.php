@extends('layouts.realstate')

@section('content')
<!-- Breadcrumb-->
<nav class="mb-3 pt-md-3" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="real-estate-home-v1.html">Home</a></li>
        <li class="breadcrumb-item"><a href="real-estate-catalog-rent.html">Property</a></li>
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
                    <li class="me-3 pe-3 border-end"><b class="me-1">4</b><i class="fi-bed mt-n1 lead align-middle text-muted"></i></li>
                    <li class="me-3 pe-3 border-end"><b class="me-1">2</b><i class="fi-bath mt-n1 lead align-middle text-muted"></i></li>
                    <li class="me-3 pe-3 border-end"><b class="me-1">2</b><i class="fi-car mt-n1 lead align-middle text-muted"></i></li>
                    <li><b>56 </b>sq.m</li>
                </ul>
            </div>
        </div>
        <!-- Overview-->
        <h2 class="h5">Overview</h2>
        <p class="mb-4 pb-2">{{$data->description}}</p>

        <!-- Rental agent-->
        <h2 class="h5">Rental agent</h2>
        <div class="card card-horizontal">
            <div class="card-img-top bg-position-center-x" style="background-image: url(img/real-estate/agents/01.jpg);"></div>
            <blockquote class="blockquote card-body p-4">
                <p class="mb-4">Amet libero morbi venenatis ut est. Iaculis leo ultricies nunc id ante adipiscing. Vel metus odio at faucibus ac. Neque id placerat et id ut.</p>
                <footer class="d-flex justify-content-between">
                    <div class="pe-3">
                        <h6 class="mb-0">Kristin Watson</h6>
                        <div class="text-muted fw-normal fs-sm mb-3">Imperial Property Group Agent</div><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="#"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="#"><i class="fi-twitter"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="#"><i class="fi-instagram"></i></a>
                    </div>
                    <div><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i></span>
                        <div class="text-muted fs-sm mt-1">24 reviews</div>
                    </div>
                </footer>
            </blockquote>
        </div>
    </div>
    <!-- Sidebar with details-->
    <aside class="col-lg-5">
        <div class="ps-lg-5">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div><span class="badge bg-success me-2 mb-2">Verified</span><span class="badge bg-info me-2 mb-2">New</span></div>
                <div class="text-nowrap">
                    <button class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mb-2" type="button" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fi-heart"></i></button>
                    <div class="dropdown d-inline-block" data-bs-toggle="tooltip" title="Share">
                        <button class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mb-2" type="button" data-bs-toggle="dropdown"><i class="fi-share"></i></button>
                        <div class="dropdown-menu dropdown-menu-end my-1">
                            <button class="dropdown-item" type="button"><i class="fi-facebook fs-base opacity-75 me-2"></i>Facebook</button>
                            <button class="dropdown-item" type="button"><i class="fi-twitter fs-base opacity-75 me-2"></i>Twitter</button>
                            <button class="dropdown-item" type="button"><i class="fi-instagram fs-base opacity-75 me-2"></i>Instagram</button>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="h5 mb-2">Monthly rent:</h3>
            <h2 class="h3 mb-4 pb-2">$2,000<span class="d-inline-block ms-1 fs-base fw-normal text-body">/month</span></h2>
            <!-- Property details-->
            <div class="card border-0 bg-secondary mb-4">
                <div class="card-body">
                    <h5 class="mb-0 pb-3">Property Details</h5>
                    <ul class="list-unstyled mt-n2 mb-0">
                        <li class="mt-2 mb-0"><b>Type: </b>apartment</li>
                        <li class="mt-2 mb-0"><b>Apartment area: </b>56 sq.m</li>
                        <li class="mt-2 mb-0"><b>Built: </b>2015</li>
                        <li class="mt-2 mb-0"><b>Bedrooms: </b>4</li>
                        <li class="mt-2 mb-0"><b>Bathrooms: </b>2</li>
                        <li class="mt-2 mb-0"><b>Parking places: </b>2</li>
                        <li class="mt-2 mb-0"><b>Pets allowed: </b>cats only</li>
                    </ul>
                </div>
            </div><a class="btn btn-lg btn-primary w-100 mb-3" href="#">Book a viewing</a><a class="d-inline-block mb-4 pb-2 text-decoration-none" href="#"><i class="fi-help me-2 mt-n1 align-middle"></i>Frequently asked questions</a>
            <!-- Amenities-->
            <div class="card border-0 bg-secondary mb-4">
                <div class="card-body">
                    <h5>Amenities</h5>
                    <ul class="list-unstyled row row-cols-md-2 row-cols-1 gy-2 mb-0 text-nowrap">
                        <li class="col"><i class="fi-wifi mt-n1 me-2 fs-lg align-middle"></i>WiFi</li>
                        <li class="col"><i class="fi-thermometer mt-n1 me-2 fs-lg align-middle"></i>Heating</li>
                        <li class="col"><i class="fi-dish mt-n1 me-2 fs-lg align-middle"></i>Dishwasher</li>
                        <li class="col"><i class="fi-parking mt-n1 me-2 fs-lg align-middle"></i>Parking place</li>
                        <li class="col"><i class="fi-snowflake mt-n1 me-2 fs-lg align-middle"></i>Air conditioning</li>
                        <li class="col"><i class="fi-iron mt-n1 me-2 fs-lg align-middle"></i>Iron</li>
                        <li class="col"><i class="fi-tv mt-n1 me-2 fs-lg align-middle"></i>TV</li>
                        <li class="col"><i class="fi-laundry mt-n1 me-2 fs-lg align-middle"></i>Laundry</li>
                        <li class="col"><i class="fi-cctv mt-n1 me-2 fs-lg align-middle"></i>Security cameras</li>
                        <li class="col"><i class="fi-no-smoke mt-n1 me-2 fs-lg align-middle"></i>No smocking</li>
                    </ul>
                    <div class="collapse" id="seeMoreAmenities">
                        <ul class="list-unstyled row row-cols-md-2 row-cols-1 gy-2 pt-2 mb-0 text-nowrap">
                            <li class="col"><i class="fi-double-bed mt-n1 me-2 fs-lg align-middle"></i>Double bed</li>
                            <li class="col"><i class="fi-bed mt-n1 me-2 fs-lg align-middle"></i>Single bed</li>
                        </ul>
                    </div><a class="collapse-label collapsed d-inline-block mt-3" href="#seeMoreAmenities" data-bs-toggle="collapse" data-bs-label-collapsed="Show more" data-bs-label-expanded="Show less" role="button" aria-expanded="false" aria-controls="seeMoreAmenities"></a>
                </div>
            </div>
            <!-- Not included in rent-->
            <div class="card border-0 bg-secondary mb-4">
                <div class="card-body">
                    <h5>Not included in rent</h5>
                    <ul class="list-unstyled row row-cols-md-2 row-cols-1 gy-2 mb-0 text-nowrap">
                        <li class="col"><i class="fi-swimming-pool mt-n1 me-2 fs-lg align-middle"></i>Swimming pool</li>
                        <li class="col"><i class="fi-cafe mt-n1 me-2 fs-lg align-middle"></i>Restaurant</li>
                        <li class="col"><i class="fi-spa mt-n1 me-2 fs-lg align-middle"></i>Spa lounge</li>
                        <li class="col"><i class="fi-cocktail mt-n1 me-2 fs-lg align-middle"></i>Bar</li>
                    </ul>
                </div>
            </div>
            <!-- Post meta-->
            <ul class="d-flex mb-4 list-unstyled fs-sm">
                <li class="me-3 pe-3 border-end">Published: <b>Dec 9, 2020</b></li>
                <li class="me-3 pe-3 border-end">Ad number: <b>681013232</b></li>
                <li class="me-3 pe-3">Views: <b>48</b></li>
            </ul>
            <iframe class="responsive-iframe" width="100" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q={{$data->address.'+'.$data->barangay.'+'.$data->municipality .'+'.$data->province}}&t=&z=17   &ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

        </div>
    </aside>
</div>
<!-- {{$data}} -->

@endsection