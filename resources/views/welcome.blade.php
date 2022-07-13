@extends('layouts.realstate')

@section('content')
<!-- Hero-->
<section class="container pt-5 my-5 pb-lg-4">
    <div class="row pt-0 pt-md-2 pt-lg-0">
        <div class="col-xl-7 col-lg-6 col-md-5 order-md-2 mb-4 mb-lg-3"><img src="img/real-estate/hero-image.jpg" alt="Hero image"></div>
        <div class="col-xl-5 col-lg-6 col-md-7 order-md-1 pt-xl-5 pe-lg-0 mb-3 text-md-start text-center">
            <h1 class="display-4 mt-lg-5 mb-md-4 mb-3 pt-md-4 pb-lg-2">Easy way to find <br> a perfect property</h1>
            <p class="position-relative lead me-lg-n5">We provide a complete service for the sale, purchase or rental of real estate. We have been operating more than 10 years. Search millions of apartments and houses on Finder.</p>
        </div>
        <!-- Search property form group-->
        <div class="col-xl-8 col-lg-10 order-3 mt-lg-n5">
            <form class="form-group d-block">
                <div class="row g-0 ms-sm-n2">
                    <div class="col-md-8 d-sm-flex align-items-center">
                        <div class="dropdown w-sm-50 border-end-sm" data-bs-toggle="select">
                            <button class="btn btn-link dropdown-toggle ps-2 ps-sm-3" type="button" data-bs-toggle="dropdown"><i class="fi-home me-2"></i><span class="dropdown-toggle-label">For rent</span></button>
                            <input type="hidden">
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">For rent</span></a></li>
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">For sale</span></a></li>
                            </ul>
                        </div>
                        <hr class="d-sm-none my-2">
                        <div class="dropdown w-sm-50 border-end-sm" data-bs-toggle="select">
                            <button class="btn btn-link dropdown-toggle ps-2 ps-sm-3" type="button" data-bs-toggle="dropdown"><i class="fi-map-pin me-2"></i><span class="dropdown-toggle-label">Location</span></button>
                            <input type="hidden">
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">New York</span></a></li>
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Chicago</span></a></li>
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Los Angeles</span></a></li>
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">San Diego</span></a></li>
                            </ul>
                        </div>
                        <hr class="d-sm-none my-2">
                        <div class="dropdown w-sm-50 border-end-md" data-bs-toggle="select">
                            <button class="btn btn-link dropdown-toggle ps-2 ps-sm-3" type="button" data-bs-toggle="dropdown"><i class="fi-list me-2"></i><span class="dropdown-toggle-label">Property type</span></button>
                            <input type="hidden">
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Houses</span></a></li>
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Apartments</span></a></li>
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Commercial</span></a></li>
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Daily rental</span></a></li>
                                <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">New buildings</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <hr class="d-md-none mt-2">
                    <div class="col-md-4 d-sm-flex align-items-center pt-4 pt-md-0">
                        <div class="d-flex align-items-center w-100 pt-2 pb-4 py-sm-0 ps-2 ps-sm-3"><i class="fi-cash fs-lg text-muted me-2"></i><span class="text-muted">Price</span>
                            <div class="range-slider pe-0 pe-sm-3" data-start-min="450" data-min="0" data-max="10000" data-step="1">
                                <div class="range-slider-ui"></div>
                                <input class="form-control range-slider-value-min" type="hidden">
                            </div>
                        </div>
                        <button class="btn btn-icon btn-primary px-3 w-100 w-sm-auto flex-shrink-0" type="button"><i class="fi-search"></i><span class="d-sm-none d-inline-block ms-2">Search</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Property categories-->
<section class="container mb-5">
    <div class="row row-cols-lg-6 row-cols-sm-3 row-cols-2 g-3 g-xl-4">
        <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover h-100 text-center" href="real-estate-catalog-rent.html">
                <div class="icon-box-media bg-faded-primary text-primary rounded-circle mb-3 mx-auto"><i class="fi-real-estate-house"></i></div>
                <h3 class="icon-box-title fs-base mb-0">Houses</h3>
            </a></div>
        <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover h-100 text-center" href="real-estate-catalog-sale.html">
                <div class="icon-box-media bg-faded-primary text-primary rounded-circle mb-3 mx-auto"><i class="fi-apartment"></i></div>
                <h3 class="icon-box-title fs-base mb-0">Apartments</h3>
            </a></div>
        <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover h-100 text-center" href="real-estate-catalog-rent.html">
                <div class="icon-box-media bg-faded-primary text-primary rounded-circle mb-3 mx-auto"><i class="fi-shop"></i></div>
                <h3 class="icon-box-title fs-base mb-0">Commercial</h3>
            </a></div>
        <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover h-100 text-center" href="real-estate-catalog-sale.html">
                <div class="icon-box-media bg-faded-primary text-primary rounded-circle mb-3 mx-auto"><i class="fi-rent"></i></div>
                <h3 class="icon-box-title fs-base mb-0">Daily rental</h3>
            </a></div>
        <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover h-100 text-center" href="real-estate-catalog-rent.html">
                <div class="icon-box-media bg-faded-primary text-primary rounded-circle mb-3 mx-auto"><i class="fi-house-chosen"></i></div>
                <h3 class="icon-box-title fs-base mb-0">New buildings</h3>
            </a></div>
        <div class="col">
            <div class="dropdown h-100"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover text-center" href="#" data-bs-toggle="dropdown">
                    <div class="icon-box-media bg-faded-primary text-primary rounded-circle mb-3 mx-auto"><i class="fi-dots-horisontal"></i></div>
                    <h3 class="icon-box-title fs-base mb-0">More</h3>
                </a>
                <div class="dropdown-menu dropdown-menu-end my-1"><a class="dropdown-item fw-bold" href="real-estate-catalog-sale.html"><i class="fi-single-bed fs-base opacity-60 me-2"></i>Room</a><a class="dropdown-item fw-bold" href="real-estate-catalog-rent.html"><i class="fi-computer fs-base opacity-60 me-2"></i>Office</a><a class="dropdown-item fw-bold" href="real-estate-catalog-sale.html"><i class="fi-real-estate-buy fs-base opacity-60 me-2"></i>Land</a><a class="dropdown-item fw-bold" href="real-estate-catalog-rent.html"><i class="fi-parking fs-base opacity-60 me-2"></i>Parking lot</a></div>
            </div>
        </div>
    </div>
</section>
<!-- Services-->
<section class="container mb-5 mt-n3 mt-lg-0">
    <div class="tns-carousel-wrapper tns-nav-outside tns-nav-outside-flush mx-n2">
        <div class="tns-carousel-inner row gx-4 mx-0 py-3" data-carousel-options="{&quot;items&quot;: 3, &quot;controls&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}}}">
            <div class="col">
                <div class="card card-hover border-0 h-100 pb-2 pb-sm-3 px-sm-3 text-center"><img class="d-block mx-auto my-3" src="img/real-estate/illustrations/buy.svg" width="256" alt="Illustration">
                    <div class="card-body">
                        <h2 class="h4 card-title">Buy a property</h2>
                        <p class="card-text fs-sm">Blandit lorem dictum in velit. Et nisi at faucibus mauris pretium enim. Risus sapien nisi aliquam egestas leo dignissim.</p>
                    </div>
                    <div class="card-footer pt-0 border-0"><a class="btn btn-outline-primary stretched-link" href="real-estate-catalog-sale.html">Find a home</a></div>
                </div>
            </div>
            <div class="col">
                <div class="card card-hover border-0 h-100 pb-2 pb-sm-3 px-sm-3 text-center"><img class="d-block mx-auto my-3" src="img/real-estate/illustrations/sell.svg" width="256" alt="Illustration">
                    <div class="card-body">
                        <h2 class="h4 card-title">Sell a property</h2>
                        <p class="card-text fs-sm">Amet, cras orci justo, tortor nisl aliquet. Enim tincidunt tellus nunc, nulla arcu posuere quis. Velit turpis orci venenatis.</p>
                    </div>
                    <div class="card-footer pt-0 border-0"><a class="btn btn-outline-primary stretched-link" href="#">Place an ad</a></div>
                </div>
            </div>
            <div class="col">
                <div class="card card-hover border-0 h-100 pb-2 pb-sm-3 px-sm-3 text-center"><img class="d-block mx-auto my-3" src="img/real-estate/illustrations/rent.svg" width="256" alt="Illustration">
                    <div class="card-body">
                        <h2 class="h4 card-title">Rent a property</h2>
                        <p class="card-text fs-sm">Sed sed aliquet sed id purus malesuada congue viverra. Habitant quis lacus, volutpat natoque ipsum iaculis cursus.</p>
                    </div>
                    <div class="card-footer pt-0 border-0"><a class="btn btn-outline-primary stretched-link" href="real-estate-catalog-rent.html">Find a rental</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="mt-n1 mb-5 d-md-none">
<!-- Top offers (carousel)-->
@if($topoffer)
@include('components.welcome.topoffer')
@endif

<!-- Recently added-->
@if(count($addedtoday)===3)
@include('components.welcome.recentlyadded')
@endif
<!-- Cities (carousel)-->
<section class="container mb-5 pb-2">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h2 class="h3 mb-0">Search property by city</h2><a class="btn btn-link fw-normal ms-md-3 pb-0" href="real-estate-catalog-rent.html">View all<i class="fi-arrow-long-right ms-2"></i></a>
    </div>
    <div class="tns-carousel-wrapper tns-controls-outside-xxl tns-nav-outside tns-nav-outside-flush mx-n2">
        <div class="tns-carousel-inner row gx-4 mx-0 py-md-4 py-3" data-carousel-options="{&quot;items&quot;: 4, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;992&quot;:{&quot;items&quot;:4}}}">
            <!-- Item-->
            <div class="col"><a class="card shadow-sm card-hover border-0" href="real-estate-catalog-sale.html">
                    <div class="card-img-top card-img-hover"><span class="img-overlay opacity-65"></span><img src="img/real-estate/city/new-york.jpg" alt="New York">
                        <div class="content-overlay start-0 top-0 d-flex align-items-center justify-content-center w-100 h-100 p-3">
                            <div class="w-100 p-1">
                                <div class="mb-2">
                                    <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-wallet mt-n1 me-2 fs-sm align-middle"></i>Property for sale</h4>
                                    <div class="d-flex align-items-center">
                                        <div class="progress progress-light w-100">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div><span class="text-light fs-sm ps-1 ms-2">893</span>
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-home mt-n1 me-2 fs-sm align-middle"></i>Property for rent</h4>
                                    <div class="d-flex align-items-center">
                                        <div class="progress progress-light w-100">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div><span class="text-light fs-sm ps-1 ms-2">3756</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="mb-0 fs-base text-nav">New York</h3>
                    </div>
                </a></div>
            <!-- Item-->
            <div class="col"><a class="card shadow-sm card-hover border-0" href="real-estate-catalog-rent.html">
                    <div class="card-img-top card-img-hover"><span class="img-overlay opacity-65"></span><img src="img/real-estate/city/chicago.jpg" alt="Chicago">
                        <div class="content-overlay start-0 top-0 d-flex align-items-center justify-content-center w-100 h-100 p-3">
                            <div class="w-100 p-1">
                                <div class="mb-2">
                                    <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-wallet mt-n1 me-2 fs-sm align-middle"></i>Property for sale</h4>
                                    <div class="d-flex align-items-center">
                                        <div class="progress progress-light w-100">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div><span class="text-light fs-sm ps-1 ms-2">268</span>
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-home mt-n1 me-2 fs-sm align-middle"></i>Property for rent</h4>
                                    <div class="d-flex align-items-center">
                                        <div class="progress progress-light w-100">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div><span class="text-light fs-sm ps-1 ms-2">1540</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="mb-0 fs-base text-nav">Chicago</h3>
                    </div>
                </a></div>
            <!-- Item-->
            <div class="col"><a class="card shadow-sm card-hover border-0" href="real-estate-catalog-sale.html">
                    <div class="card-img-top card-img-hover"><span class="img-overlay opacity-65"></span><img src="img/real-estate/city/los-angeles.jpg" alt="Los Angeles">
                        <div class="content-overlay start-0 top-0 d-flex align-items-center justify-content-center w-100 h-100 p-3">
                            <div class="w-100 p-1">
                                <div class="mb-2">
                                    <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-wallet mt-n1 me-2 fs-sm align-middle"></i>Property for sale</h4>
                                    <div class="d-flex align-items-center">
                                        <div class="progress progress-light w-100">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div><span class="text-light fs-sm ps-1 ms-2">2750</span>
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-home mt-n1 me-2 fs-sm align-middle"></i>Property for rent</h4>
                                    <div class="d-flex align-items-center">
                                        <div class="progress progress-light w-100">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div><span class="text-light fs-sm ps-1 ms-2">692</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="mb-0 fs-base text-nav">Los Angeles</h3>
                    </div>
                </a></div>
            <!-- Item-->
            <div class="col"><a class="card shadow-sm card-hover border-0" href="real-estate-catalog-rent.html">
                    <div class="card-img-top card-img-hover"><span class="img-overlay opacity-65"></span><img src="img/real-estate/city/san-diego.jpg" alt="San Diego">
                        <div class="content-overlay start-0 top-0 d-flex align-items-center justify-content-center w-100 h-100 p-3">
                            <div class="w-100 p-1">
                                <div class="mb-2">
                                    <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-wallet mt-n1 me-2 fs-sm align-middle"></i>Property for sale</h4>
                                    <div class="d-flex align-items-center">
                                        <div class="progress progress-light w-100">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div><span class="text-light fs-sm ps-1 ms-2">1739</span>
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-home mt-n1 me-2 fs-sm align-middle"></i>Property for rent</h4>
                                    <div class="d-flex align-items-center">
                                        <div class="progress progress-light w-100">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div><span class="text-light fs-sm ps-1 ms-2">1854</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="mb-0 fs-base text-nav">San Diego</h3>
                    </div>
                </a></div>
            <!-- Item-->
            <div class="col"><a class="card shadow-sm card-hover border-0" href="real-estate-catalog-sale.html">
                    <div class="card-img-top card-img-hover"><span class="img-overlay opacity-65"></span><img src="img/real-estate/city/dallas.jpg" alt="Dallas">
                        <div class="content-overlay start-0 top-0 d-flex align-items-center justify-content-center w-100 h-100 p-3">
                            <div class="w-100 p-1">
                                <div class="mb-2">
                                    <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-wallet mt-n1 me-2 fs-sm align-middle"></i>Property for sale</h4>
                                    <div class="d-flex align-items-center">
                                        <div class="progress progress-light w-100">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div><span class="text-light fs-sm ps-1 ms-2">2567</span>
                                    </div>
                                </div>
                                <div class="pt-1">
                                    <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-home mt-n1 me-2 fs-sm align-middle"></i>Property for rent</h4>
                                    <div class="d-flex align-items-center">
                                        <div class="progress progress-light w-100">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div><span class="text-light fs-sm ps-1 ms-2">1204</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="mb-0 fs-base text-nav">Dallas</h3>
                    </div>
                </a></div>
        </div>
    </div>
</section>
<!-- Top agents (lnked carousel)-->
<section class="container mb-5 pb-2 pb-lg-4">
    <h2 class="h3 mb-4 pb-3 text-center text-md-start">Top real estate agents</h2>
    <div class="tns-carousel-wrapper">
        <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 1, &quot;mode&quot;: &quot;gallery&quot;, &quot;controlsContainer&quot;: &quot;#agents-carousel-controls&quot;, &quot;nav&quot;: false}">
            <div>
                <div class="row align-items-center">
                    <div class="col-xl-4 d-none d-xl-block"><img class="rounded-3" src="img/real-estate/agents/01.jpg" alt="Agent picture"></div>
                    <div class="col-xl-4 col-md-5 col-sm-4"><img class="rounded-3" src="img/real-estate/agents/02.jpg" alt="Agent picture"></div>
                    <div class="col-xl-4 col-md-7 col-sm-8 px-4 px-sm-3 px-md-0 ms-md-n4 mt-n5 mt-sm-0 py-3">
                        <div class="card border-0 shadow-sm ms-sm-n5">
                            <blockquote class="blockquote card-body">
                                <h4 style="max-width: 22rem;">&quot;I will select the best accommodation for you&quot;</h4>
                                <p class="d-sm-none d-lg-block">Amet libero morbi venenatis ut est. Iaculis leo ultricies nunc id ante adipiscing. Vel metus odio at faucibus ac. Neque id placerat et id ut. Scelerisque eu mi ullamcorper sit urna. Est volutpat dignissim nec.</p>
                                <footer class="d-flex justify-content-between">
                                    <div class="pe-3"><a class="text-decoration-none" href="real-estate-vendor-properties.html">
                                            <h6 class="mb-0">Floyd Miles</h6>
                                            <div class="text-muted fw-normal fs-sm mb-3">Imperial Property Group Agent</div>
                                        </a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="#"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="#"><i class="fi-twitter"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="#"><i class="fi-linkedin"></i></a></div>
                                    <div><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i></span>
                                        <div class="text-muted fs-sm mt-1">45 reviews</div>
                                    </div>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row align-items-center">
                    <div class="col-xl-4 d-none d-xl-block"><img class="rounded-3" src="img/real-estate/agents/02.jpg" alt="Agent picture"></div>
                    <div class="col-xl-4 col-md-5 col-sm-4"><img class="rounded-3" src="img/real-estate/agents/03.jpg" alt="Agent picture"></div>
                    <div class="col-xl-4 col-md-7 col-sm-8 px-4 px-sm-3 px-md-0 ms-md-n4 mt-n5 mt-sm-0 py-3">
                        <div class="card border-0 shadow-sm ms-sm-n5">
                            <blockquote class="blockquote card-body">
                                <h4 style="max-width: 22rem;">&quot;I don't say no, I just figure out a way to make it work&quot;</h4>
                                <p class="d-sm-none d-lg-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                <footer class="d-flex justify-content-between">
                                    <div class="pe-3"><a class="text-decoration-none" href="real-estate-vendor-properties.html">
                                            <h6 class="mb-0">Guy Hawkins</h6>
                                            <div class="text-muted fw-normal fs-sm mb-3">Imperial Property Group Agent</div>
                                        </a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="#"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="#"><i class="fi-twitter"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="#"><i class="fi-linkedin"></i></a></div>
                                    <div><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i></span>
                                        <div class="text-muted fs-sm mt-1">16 reviews</div>
                                    </div>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row align-items-center">
                    <div class="col-xl-4 d-none d-xl-block"><img class="rounded-3" src="img/real-estate/agents/03.jpg" alt="Agent picture"></div>
                    <div class="col-xl-4 col-md-5 col-sm-4"><img class="rounded-3" src="img/real-estate/agents/01.jpg" alt="Agent picture"></div>
                    <div class="col-xl-4 col-md-7 col-sm-8 px-4 px-sm-3 px-md-0 ms-md-n4 mt-n5 mt-sm-0 py-3">
                        <div class="card border-0 shadow-sm ms-sm-n5">
                            <blockquote class="blockquote card-body">
                                <h4 style="max-width: 22rem;">&quot;Over 10 years of experience as a real estate agent&quot;</h4>
                                <p class="d-sm-none d-lg-block">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.</p>
                                <footer class="d-flex justify-content-between">
                                    <div class="pe-3"><a class="text-decoration-none" href="real-estate-vendor-properties.html">
                                            <h6 class="mb-0">Kristin Watson</h6>
                                            <div class="text-muted fw-normal fs-sm mb-3">Imperial Property Group Agent</div>
                                        </a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="#"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="#"><i class="fi-twitter"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle me-2 mb-2" href="#"><i class="fi-linkedin"></i></a></div>
                                    <div><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i></span>
                                        <div class="text-muted fs-sm mt-1">24 reviews</div>
                                    </div>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tns-carousel-controls justify-content-center justify-content-md-start my-2 mt-md-4" id="agents-carousel-controls">
        <button class="mx-2" type="button"><i class="fi-chevron-left"></i></button>
        <button class="mx-2" type="button"><i class="fi-chevron-right"></i></button>
    </div>
</section>
@endsection