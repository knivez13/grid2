<section class="container mb-5 pb-md-4">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h2 class="h3 mb-0">Top offers</h2><a class="btn btn-link fw-normal p-0" href="#">View all<i class="fi-arrow-long-right ms-2"></i></a>
    </div>
    <div class="tns-carousel-wrapper tns-controls-outside-xxl tns-nav-outside tns-nav-outside-flush mx-n2">
        <div class="tns-carousel-inner row gx-4 mx-0 pt-3 pb-4" data-carousel-options="{&quot;items&quot;: 4, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;992&quot;:{&quot;items&quot;:4}}}">
            <!-- Item-->
            @foreach ($topoffer as $data)
            <div class="col">
                <div class="card shadow-sm card-hover border-0 h-100">
                    <div class="card-img-top card-img-hover">
                        <a class="img-overlay" href="{{ route('viewproperty', $data->title_slug) }}">

                        </a>
                        <div class="position-absolute start-0 top-0 pt-3 ps-3">
                            <span class="d-table badge bg-info mb-1">{{$data->listingcategory->name}}</span>
                            <span class="d-table badge bg-danger mb-1">{{$data->listingtype->name}}</span>
                            <span class="d-table badge bg-primary mb-1">{{$data->propertytype->name}}</span>
                            <span class="d-table badge bg-success">{{$data->deliveryunit->name}}</span>
                        </div>
                        <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
                        </div>
                        <img src="/upload/coverphoto/{{ $data->coverphoto }}" alt="Image">
                    </div>
                    <div class="card-body position-relative pb-3">
                        <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">{{$data->status->name}}</h4>
                        <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href="{{ route('viewproperty', $data->title_slug) }}">{{$data->title}} | {{$data->lot_area}} sq.m</a></h3>
                        <p class="mb-2 fs-sm text-muted">{{$data->address.' '.$data->barangay.', '.$data->municipality .', '.$data->province}}</p>
                        <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>{{$data->last_price}}</div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap">
                        @if($data->number_of_bedroom)
                        <span class="d-inline-block mx-1 px-2 fs-sm">{{$data->number_of_bedroom}}
                            <i class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i>
                        </span>
                        @endif

                        @if($data->number_of_bathroom)
                        <span class="d-inline-block mx-1 px-2 fs-sm">{{$data->number_of_bathroom}}
                            <i class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i>
                        </span>
                        @endif

                        @if($data->number_of_parking)
                        <span class="d-inline-block mx-1 px-2 fs-sm">{{$data->number_of_parking}}
                            <i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>