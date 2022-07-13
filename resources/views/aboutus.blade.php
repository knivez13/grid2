@extends('layouts.realstate')

@section('content')
<div class="container mt-5 mb-md-4 pt-5">
    <nav class="mb-3 pt-md-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="real-estate-home-v1.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
    </nav>
</div>
<!-- Page header-->
<section class="container mb-5 pb-2">
    <div class="row align-items-center justify-content-center">
        <!-- Hero content-->
        <div class="col-lg-4 col-md-5 col-sm-9 order-md-1 order-2 text-md-start text-center">
            <h1 class="mb-4">About Finder</h1>
            <p class="mb-4 pb-3 fs-lg">We provide a complete service for the sale, purchase or rental of real estate. We have been operating more than 10 years. Search millions of apartments and houses on Finder.</p><a class="btn btn-lg btn-primary" href="real-estate-contacts.html">Contact us</a>
        </div>
        <!-- Hero carousel-->
        <div class="col-lg-7 col-md-6 offset-md-1 col-12 order-md-2 order-1">
            <div class="tns-carousel-wrapper tns-controls-static tns-nav-outside">
                <div class="tns-carousel-inner" data-carousel-options="{&quot;loop&quot;: true, &quot;gutter&quot;: 16}">
                    <div><img class="rounded-3" src="img/real-estate/about/hero/01.jpg" alt="Carousel image"></div>
                    <div><img class="rounded-3" src="img/real-estate/about/hero/02.jpg" alt="Carousel image"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why choose us?-->
<section class="container mb-2 mb-xl-5 pb-lg-4">
    <h2 class="h3 mb-4">Why choose us?</h2>
    <!-- Features carousel-->
    <div class="tns-carousel-wrapper tns-nav-outside">
        <div class="tns-carousel-inner" data-carousel-options="{&quot;loop&quot;: false, &quot;controls&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1, &quot;gutter&quot;: 16},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 20},&quot;768&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 24}}}">
            <!-- Feature slide-->
            <div>
                <div class="card border-0">
                    <div class="card-body">
                        <svg class="mb-3" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#fd5631">
                            <path d="M13.585 21.456a10.416 10.416 0 1 0 20.832 0c0-5.76-4.656-10.464-10.416-10.464s-10.416 4.704-10.416 10.464zm18.096 0c0 4.224-3.456 7.68-7.68 7.68s-7.68-3.456-7.68-7.68 3.456-7.68 7.68-7.68 7.68 3.408 7.68 7.68zm-10.225-.96a1.36 1.36 0 0 0-1.92 0 1.36 1.36 0 0 0 0 1.92l2.352 2.352c.24.24.624.384.96.384s.72-.144.96-.384l4.512-4.512a1.36 1.36 0 0 0 0-1.92 1.36 1.36 0 0 0-1.92 0l-3.552 3.552-1.392-1.392zM42 10.512C29.568 5.568 24.96 1.584 24.912 1.536c-.528-.48-1.296-.48-1.824 0C23.04 1.584 18.48 5.52 6 10.512c-.528.192-.864.72-.864 1.248 0 24.576 17.424 34.464 18.192 34.848.192.096.432.192.672.192a1.2 1.2 0 0 0 .672-.192c.72-.384 18.192-10.272 18.192-34.848 0-.528-.336-1.056-.864-1.248zM24 43.824C20.928 41.808 8.304 32.352 7.872 12.72 17.328 8.88 22.128 5.664 24 4.32c1.872 1.392 6.672 4.56 16.128 8.4C39.744 32.352 27.072 41.808 24 43.824z"></path>
                        </svg>
                        <h3 class="h5 card-title pb-1">Safety is our priority</h3>
                        <p class="card-text">Vel et aliquet diam vulputate hendrerit lorem eget amet adipiscing. At ut ut consectetur in sed massa arcu risus sed.</p>
                    </div>
                </div>
            </div>
            <!-- Feature slide-->
            <div>
                <div class="card border-0">
                    <div class="card-body">
                        <svg class="mb-3" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#fd5631">
                            <path d="M39.976 40.416l-5.667-26.529c-.098-.44-.391-.831-.782-1.026L20.531 6.217l-.928-4.202c-.195-.831-.977-1.368-1.808-1.173s-1.368.977-1.172 1.808l.879 4.202-9.136 11.335c-.293.342-.391.831-.293 1.27l5.618 26.529c.195.831.977 1.368 1.808 1.173l23.304-4.934a1.59 1.59 0 0 0 1.173-1.808zm-23.597 3.469L11.2 19.554l7.182-8.843.635 2.931c.195.831.977 1.368 1.808 1.172s1.368-.977 1.172-1.808l-.635-2.931 10.162 5.179 5.179 24.33-20.324 4.299zm7.963-17.149l-2.052.44a1.54 1.54 0 0 1-1.857-1.27c-.146-.831.44-1.612 1.27-1.759l2.052-.44c.684-.146 1.368.195 1.71.782.098.244.342.342.586.293l1.954-.44c.293-.049.489-.391.391-.684-.733-2.003-2.736-3.225-4.837-3.029l-.391-1.954c-.049-.293-.342-.489-.635-.391l-1.954.391c-.293.049-.489.342-.391.635l.391 1.954c-2.247.733-3.664 3.029-3.127 5.374.586 2.492 3.078 4.006 5.521 3.469l2.003-.44c.831-.195 1.661.293 1.857 1.124.244.879-.293 1.71-1.172 1.905l-2.101.44c-.684.147-1.368-.195-1.71-.782-.098-.195-.342-.342-.586-.293l-1.954.44c-.342.049-.488.391-.391.684.733 2.003 2.736 3.224 4.837 3.029l.391 1.905c.049.293.342.489.635.391l1.954-.391c.293-.049.489-.342.391-.635l-.391-1.905c2.247-.733 3.664-3.029 3.127-5.374-.538-2.492-3.029-4.006-5.521-3.469z"></path>
                        </svg>
                        <h3 class="h5 card-title pb-1">Fair price</h3>
                        <p class="card-text">Tincidunt mauris sit eu, lacinia pharetra, lorem neque dui. Maecenas ultricies laoreet facilisis fusce amet, consequat neque.</p>
                    </div>
                </div>
            </div>
            <!-- Feature slide-->
            <div>
                <div class="card border-0">
                    <div class="card-body">
                        <svg class="mb-3" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none">
                            <path fill-rule="evenodd" d="M5.493 32.863a6.53 6.53 0 0 1-5.446-6.441v-3.981a6.53 6.53 0 0 1 1.913-4.619c1.225-1.225 2.887-1.913 4.619-1.913h.435C7.709 7.137 15.048.234 24 .234s16.291 6.903 16.986 15.675h.435a6.53 6.53 0 0 1 6.532 6.532v3.981a6.53 6.53 0 0 1-6.532 6.532h-1.928a1.45 1.45 0 0 1-1.447-1.448V17.274A14.05 14.05 0 0 0 24 3.228 14.05 14.05 0 0 0 9.954 17.274v14.232a1.45 1.45 0 0 1-1.447 1.448h0a8.87 8.87 0 0 0 8.821 7.935h.199c.248-.839.702-1.611 1.332-2.241.991-.991 2.336-1.548 3.738-1.548h2.807a5.29 5.29 0 0 1 5.287 5.286 5.29 5.29 0 0 1-5.287 5.287h-2.807a5.29 5.29 0 0 1-5.071-3.789h-.198c-3.147 0-6.164-1.25-8.39-3.475-2.025-2.025-3.242-4.707-3.445-7.545zm22.203 9.523c0-1.266-1.026-2.292-2.292-2.292h-2.807a2.29 2.29 0 0 0-2.292 2.292c0 1.266 1.026 2.292 2.292 2.292h2.807c1.266 0 2.292-1.026 2.292-2.292zM6.96 18.903h-.381a3.54 3.54 0 0 0-3.538 3.538v3.981a3.54 3.54 0 0 0 3.538 3.538h.381V18.903zm34.08 0V29.96h.381a3.54 3.54 0 0 0 3.538-3.538v-3.981a3.54 3.54 0 0 0-3.538-3.538h-.381z" fill="#fd5631"></path>
                        </svg>
                        <h3 class="h5 card-title pb-1">Support 24/7</h3>
                        <p class="card-text">Id velit, dui condimentum dictumst sapien quis a elementum dignissim. Dignissim ultrices scelerisque ultrices nisi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How it works-->
<section class="container mb-5 pb-2 pb-lg-4">
    <div class="row gy-4">
        <div class="col-md-5 col-12"><img class="d-block mx-auto" src="img/real-estate/illustrations/find.svg" alt="Illustration"></div>
        <div class="col-lg-6 offset-lg-1 col-md-7 col-12">
            <h2 class="h3 mb-lg-5 mb-sm-4">How it works</h2>
            <div class="steps steps-vertical">
                <div class="step active">
                    <div class="step-progress"><span class="step-number">1</span></div>
                    <div class="step-label ms-4">
                        <h3 class="h5 mb-2 pb-1">Choose your property</h3>
                        <p class="mb-0">Odio velit, massa augue etiam in parturient volutpat orci. Pulvinar amet, at est ac curabitur mauris, semper cursus metus. Imperdiet sed massa amet at turpis. Dis risus, donec in ac ultricies tempor eu, amet.</p>
                    </div>
                </div>
                <div class="step active">
                    <div class="step-progress"><span class="step-number">2</span></div>
                    <div class="step-label ms-4">
                        <h3 class="h5 mb-2 pb-1">See the property directly</h3>
                        <p class="mb-0">Id orci senectus dignissim magna nec diam bibendum at. Morbi quis turpis nulla condimentum est elementum. Tristique in accumsan eget vestibulum volutpat pretium. Sed id elit duis turpis diam justo. Dignissim blandit rutrum venenatis.</p>
                    </div>
                </div>
                <div class="step active">
                    <div class="step-progress"><span class="step-number">3</span></div>
                    <div class="step-label ms-4">
                        <h3 class="h5 mb-2 pb-1">Easy payment</h3>
                        <p class="mb-0">Ut mattis nascetur aliquam neque velit nunc sed. Morbi congue mauris amet ultrices molestie tellus proin odio diam. Feugiat elit, habitasse egestas egestas id nec potenti. Donec convallis donec tristique mattis et viverra.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Meet our professional team-->
<section class="container mb-5 pb-2 pb-lg-4">
    <div class="d-flex align-items-end justify-content-sm-between justify-content-center mb-3">
        <h2 class="h3 mb-0 text-sm-start text-center">Meet our professional team</h2>
        <div class="tns-carousel-controls tns-controls-static d-sm-flex d-none ms-4" id="external-controls">
            <button class="mx-2" type="button"><i class="fi-chevron-left"></i></button>
            <button class="mx-2" type="button"><i class="fi-chevron-right"></i></button>
        </div>
    </div>
    <!-- Team carousel-->
    <div class="tns-carousel-wrapper tns-nav-outside tns-nav-outside-flush mx-n2">
        <div class="tns-carousel-inner row gx-4 mx-0 pt-3 pb-4" data-carousel-options="{&quot;controlsContainer&quot;: &quot;#external-controls&quot;, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;992&quot;:{&quot;items&quot;:4, &quot;nav&quot;: false}}}">
            <!-- Team slide-->
            <div class="col">
                <div class="card border-0 shadow-sm mt-md-4"><img class="card-img-top" src="img/real-estate/about/team/01.jpg" alt="Devon Lane">
                    <div class="card-body text-center">
                        <h3 class="h5 card-title mb-2">Devon Lane</h3><span class="d-inline-block mb-3 fs-sm">Real Estate Agent</span>
                        <div class="pt-1"><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-twitter"></i></a><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-instagram"></i></a></div>
                    </div>
                </div>
            </div>
            <!-- Team slide-->
            <div class="col">
                <div class="card border-0 shadow-sm"><img class="card-img-top" src="img/real-estate/about/team/02.jpg" alt="Dianne Russell">
                    <div class="card-body text-center">
                        <h3 class="h5 card-title mb-2">Dianne Russell</h3><span class="d-inline-block mb-3 fs-sm">Finance Director</span>
                        <div class="pt-1"><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-twitter"></i></a><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-instagram"></i></a></div>
                    </div>
                </div>
            </div>
            <!-- Team slide-->
            <div class="col">
                <div class="card border-0 shadow-sm mt-md-4"><img class="card-img-top" src="img/real-estate/about/team/03.jpg" alt="Ronald Richards">
                    <div class="card-body text-center">
                        <h3 class="h5 card-title mb-2">Ronald Richards</h3><span class="d-inline-block mb-3 fs-sm">Sales Executive</span>
                        <div class="pt-1"><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-twitter"></i></a><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-instagram"></i></a></div>
                    </div>
                </div>
            </div>
            <!-- Team slide-->
            <div class="col">
                <div class="card border-0 shadow-sm"><img class="card-img-top" src="img/real-estate/about/team/04.jpg" alt="Albert Flores">
                    <div class="card-body text-center">
                        <h3 class="h5 card-title mb-2">Albert Flores</h3><span class="d-inline-block mb-3 fs-sm">Property Manager</span>
                        <div class="pt-1"><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-twitter"></i></a><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-instagram"></i></a></div>
                    </div>
                </div>
            </div>
            <!-- Team slide-->
            <div class="col">
                <div class="card border-0 shadow-sm mt-md-4"><img class="card-img-top" src="img/real-estate/about/team/01.jpg" alt="Devon Lane">
                    <div class="card-body text-center">
                        <h3 class="h5 card-title mb-2">Devon Lane</h3><span class="d-inline-block mb-3 fs-sm">Real Estate Agent</span>
                        <div class="pt-1"><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-twitter"></i></a><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-instagram"></i></a></div>
                    </div>
                </div>
            </div>
            <!-- Team slide-->
            <div class="col">
                <div class="card border-0 shadow-sm"><img class="card-img-top" src="img/real-estate/about/team/02.jpg" alt="Dianne Russell">
                    <div class="card-body text-center">
                        <h3 class="h5 card-title mb-2">Dianne Russell</h3><span class="d-inline-block mb-3 fs-sm">Finance Director</span>
                        <div class="pt-1"><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-twitter"></i></a><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-instagram"></i></a></div>
                    </div>
                </div>
            </div>
            <!-- Team slide-->
            <div class="col">
                <div class="card border-0 shadow-sm mt-md-4"><img class="card-img-top" src="img/real-estate/about/team/03.jpg" alt="Ronald Richards">
                    <div class="card-body text-center">
                        <h3 class="h5 card-title mb-2">Ronald Richards</h3><span class="d-inline-block mb-3 fs-sm">Sales Executive</span>
                        <div class="pt-1"><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-twitter"></i></a><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-instagram"></i></a></div>
                    </div>
                </div>
            </div>
            <!-- Team slide-->
            <div class="col">
                <div class="card border-0 shadow-sm"><img class="card-img-top" src="img/real-estate/about/team/04.jpg" alt="Albert Flores">
                    <div class="card-body text-center">
                        <h3 class="h5 card-title mb-2">Albert Flores</h3><span class="d-inline-block mb-3 fs-sm">Property Manager</span>
                        <div class="pt-1"><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-twitter"></i></a><a class="btn btn-icon btn-light-primary btn-xs rounded-circle shadow-sm mx-2" href="#"><i class="fi-instagram"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our partners (carousel)-->
<section class="container mb-5 pb-4">
    <h2 class="h3 mb-4 text-center">Our partners</h2>
    <div class="tns-carousel-wrapper tns-nav-outside tns-nav-outside-flush">
        <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 6, &quot;controls&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;500&quot;:{&quot;items&quot;:4}, &quot;992&quot;:{&quot;items&quot;:5, &quot;gutter&quot;: 16}, &quot;1200&quot;:{&quot;items&quot;:6, &quot;gutter&quot;: 24}}}">
            <div><a class="swap-image" href="#"><img class="swap-to" src="img/real-estate/brands/01_color.svg" alt="Logo" width="196"><img class="swap-from" src="img/real-estate/brands/01_gray.svg" alt="Logo" width="196"></a></div>
            <div><a class="swap-image" href="#"><img class="swap-to" src="img/real-estate/brands/02_color.svg" alt="Logo" width="196"><img class="swap-from" src="img/real-estate/brands/02_gray.svg" alt="Logo" width="196"></a></div>
            <div><a class="swap-image" href="#"><img class="swap-to" src="img/real-estate/brands/03_color.svg" alt="Logo" width="196"><img class="swap-from" src="img/real-estate/brands/03_gray.svg" alt="Logo" width="196"></a></div>
            <div><a class="swap-image" href="#"><img class="swap-to" src="img/real-estate/brands/04_color.svg" alt="Logo" width="196"><img class="swap-from" src="img/real-estate/brands/04_gray.svg" alt="Logo" width="196"></a></div>
            <div><a class="swap-image" href="#"><img class="swap-to" src="img/real-estate/brands/05_color.svg" alt="Logo" width="196"><img class="swap-from" src="img/real-estate/brands/05_gray.svg" alt="Logo" width="196"></a></div>
            <div><a class="swap-image" href="#"><img class="swap-to" src="img/real-estate/brands/06_color.svg" alt="Logo" width="196"><img class="swap-from" src="img/real-estate/brands/06_gray.svg" alt="Logo" width="196"></a></div>
        </div>
    </div>
</section>
<!-- Hear from our customers-->
<section class="container mb-5 pb-xl-5 pb-md-2">
    <h2 class="h3 mb-3 text-center">Hear from our customers</h2>
    <!-- Testimonials carousel-->
    <div class="tns-carousel-wrapper tns-controls-outside-lg tns-nav-outside tns-nav-outside-flush col-lg-10 mx-auto px-0">
        <div class="tns-carousel-inner" data-carousel-options="{&quot;gutter&quot;: 24}">
            <!-- Testimonial slide-->
            <div class="d-flex flex-md-row flex-column align-items-md-start mx-3 py-3"><img class="d-md-block d-none me-4 rounded-3" src="img/real-estate/about/testimonials/01.jpg" width="306" alt="Customer image">
                <div class="card border-0 shadow-sm h-100">
                    <blockquote class="blockquote card-body">
                        <p>Eu massa, pharetra massa integer. Sed molestie sollicitudin morbi ultrices. Odio is euismodtelle faucibus. Venenatis nunc, tristique turpis cras sodales. In dui, viverra et ac. Id justo, varius nunc, faucibus erat proin elit. Amet diam, aliquet nec quis vel. Donec ut quisque in lorem sapien.</p>
                        <footer class="d-flex align-items-center"><img src="img/job-board/company/zalo-lg.png" width="56" alt="Logo">
                            <div class="ps-3">
                                <h6 class="fs-base mb-0">Zalo Tech Company</h6>
                                <div class="text-muted fw-normal fs-sm">Floyd Miles, Head of HR Department</div>
                            </div>
                        </footer>
                    </blockquote>
                </div>
            </div>
            <!-- Testimonial slide-->
            <div class="d-flex align-items-start mx-3 py-3"><img class="d-md-block d-none me-4 rounded-3" src="img/real-estate/about/testimonials/02.jpg" width="306" alt="Customer image">
                <div class="card border-0 shadow-sm h-100">
                    <blockquote class="blockquote card-body">
                        <p>Eu massa, pharetra massa integer. Sed molestie sollicitudin morbi ultrices. Odio is euismodtelle faucibus. Venenatis nunc, tristique turpis cras sodales. In dui, viverra et ac. Id justo, varius nunc, faucibus erat proin elit. Amet diam, aliquet nec quis vel. Donec ut quisque in lorem sapien.</p>
                        <footer class="d-flex align-items-center"><img src="img/job-board/company/elastic-lg.png" width="56" alt="Logo">
                            <div class="ps-3">
                                <h6 class="fs-base mb-0">Elastic Inc.</h6>
                                <div class="text-muted fw-normal fs-sm">Guy Hawkins, Senior HR</div>
                            </div>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Find property-->
<section class="container mb-5 pb-sm-3 pb-lg-4">
    <div class="bg-secondary rounded-3">
        <div class="col-md-11 col-12 offset-md-1 p-md-0 p-2 d-flex align-items-center justify-content-between">
            <div class="me-md-5 py-md-5 px-md-0 p-4" style="max-width: 526px;">
                <h2 class="mb-md-4">
                    Buy property with confidence. <br>
                    Sell without pressure.
                </h2>
                <p class="mb-4 pb-md-3 fs-lg">Amet libero morbi venenatis ut est. Iaculis leo ultricies nunc id ante adipiscing. Vel metus odio at faucibus ac.</p><a class="btn btn-lg btn-primary" href="real-estate-catalog-sale.html"><i class="fi-search me-2"></i>Find property</a>
            </div>
            <div class="col-4 d-md-block d-none align-self-end px-0"><img class="mt-n5" src="img/real-estate/about/01.png" width="406" alt="Cover image"></div>
        </div>
    </div>
</section>

@endsection