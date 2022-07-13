<aside class="col-lg-4 col-md-5 pe-xl-4 mb-5">
    <!-- Account nav-->
    <div class="card card-body border-0 shadow-sm pb-1 me-lg-1">
        <div class="d-flex d-md-block d-lg-flex align-items-start pt-lg-2 mb-4">
            <img class="rounded-circle" src="/upload/avatar/{{ Auth::user()->picture ? Auth::user()->picture :'avatar.png' }}" width="48" alt="{{ Auth::user()->name }}" />
            <div class="pt-md-2 pt-lg-0 ps-3 ps-md-0 ps-lg-3">
                <h2 class="fs-lg mb-0">{{ Auth::user()->name }}</h2>
                <ul class="list-unstyled fs-sm mt-3 mb-0">
                    <li>
                        <a class="nav-link fw-normal p-0" href="tel:{{ Auth::user()->contact_number}}">
                            <i class="fi-phone opacity-60 me-2"></i>{{ Auth::user()->contact_number ? Auth::user()->contact_number : 'Null'}}
                        </a>
                    </li>
                    <li>
                        <a class="nav-link fw-normal p-0" href="mailto:{{ Auth::user()->email }}">
                            <i class="fi-mail opacity-60 me-2"></i>{{ Auth::user()->email }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <a class="btn btn-outline-secondary d-block d-md-none w-100 mb-3" href="#account-nav" data-bs-toggle="collapse">
            <i class="fi-align-justify me-2"></i>Menu
        </a>
        <div class="collapse d-md-block mt-3" id="account-nav">
            <div class="card-nav">
                <!-- <a class="card-nav-link {{(strpos(Route::currentRouteName(), 'user.index') === 0) ? 'active' : ''}}" href="{{ route('user.index') }}">
                    <i class="fi-user opacity-60 me-2"></i>Users List
                </a> -->
                <a class="card-nav-link {{(strpos(Route::currentRouteName(), 'aminity.index') === 0) ? 'active' : ''}}" href="{{ route('aminity.index') }}">Aminity</a>
                <a class="card-nav-link {{(strpos(Route::currentRouteName(), 'near-location.index') === 0) ? 'active' : ''}}" href="{{ route('near-location.index') }}">Near Location</a>
                <a class="card-nav-link {{(strpos(Route::currentRouteName(), 'property-type.index') === 0) ? 'active' : ''}}" href="{{ route('property-type.index') }}">Property Type</a>
                <a class="card-nav-link {{(strpos(Route::currentRouteName(), 'delivery-unit.index') === 0) ? 'active' : ''}}" href="{{ route('delivery-unit.index') }}">Delivery Units</a>
                <a class="card-nav-link {{(strpos(Route::currentRouteName(), 'priority.index') === 0) ? 'active' : ''}}" href="{{ route('priority.index') }}">Priority</a>
                <a class="card-nav-link {{(strpos(Route::currentRouteName(), 'priority-under.index') === 0) ? 'active' : ''}}" href="{{ route('priority-under.index') }}">Priority Under</a>
                <a class="card-nav-link {{(strpos(Route::currentRouteName(), 'property-status.index') === 0) ? 'active' : ''}}" href="{{ route('property-status.index') }}">Status</a>
                <a class="card-nav-link {{(strpos(Route::currentRouteName(), 'listing-category.index') === 0) ? 'active' : ''}}" href="{{ route('listing-category.index') }}">Listing Category</a>
                <a class="card-nav-link {{(strpos(Route::currentRouteName(), 'listing-type.index') === 0) ? 'active' : ''}}" href="{{ route('listing-type.index') }}">Listing Type</a>
            </div>
        </div>
    </div>
</aside>