<aside class="col-lg-4 col-md-5 pe-xl-4 mb-5">
    <!-- Account nav-->
    <div class="card card-body border-0 shadow-sm pb-1 me-lg-1">
        <div class="d-flex d-md-block d-lg-flex align-items-start pt-lg-2 mb-4">
            <img class="rounded-circle" src="/upload/avatar/{{ Auth::user()->picture ? Auth::user()->picture :'avatar.png' }}" width="48" alt="Annette Black" />
            <div class="pt-md-2 pt-lg-0 ps-3 ps-md-0 ps-lg-3">
                <h2 class="fs-lg mb-0">{{ Auth::user()->name }}</h2>
                <span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i>
                    <i class="star-rating-icon fi-star-filled active"></i>
                    <i class="star-rating-icon fi-star-filled active"></i>
                    <i class="star-rating-icon fi-star-filled active"></i>
                    <i class="star-rating-icon fi-star-filled active"></i>
                </span>
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
        <a class="btn btn-primary btn-lg w-100 mb-3" href="{{ route('property.create') }}">
            <i class="fi-plus me-2"></i>Add property
        </a>
        <a class="btn btn-outline-secondary d-block d-md-none w-100 mb-3" href="#account-nav" data-bs-toggle="collapse">
            <i class="fi-align-justify me-2"></i>Menu
        </a>
        <div class="collapse d-md-block mt-3" id="account-nav">
            <div class="card-nav">
                <a class="card-nav-link {{(strpos(Route::currentRouteName(), 'personalinfo') === 0) ? 'active' : ''}}" href="{{ route('personalinfo') }}">
                    <i class="fi-user opacity-60 me-2"></i>Personal Info
                </a>
                <a class="card-nav-link {{(strpos(Route::currentRouteName(), 'passwordsecurity') === 0) ? 'active' : ''}}" href="{{ route('passwordsecurity') }}">
                    <i class="fi-lock opacity-60 me-2"></i>Password &amp; Security
                </a>
                <a class="card-nav-link {{(strpos(Route::currentRouteName(), 'myproperty') === 0) ? 'active' : ''}}" href="{{ route('myproperty') }}">
                    <i class="fi-home opacity-60 me-2"></i>My Properties
                </a>
                <a class="card-nav-link {{(strpos(Route::currentRouteName(), 'wishlist') === 0) ? 'active' : ''}}" href="{{ route('wishlist') }}">
                    <i class="fi-heart opacity-60 me-2"></i>Wishlist
                </a>
                <!-- <a class="card-nav-link" href="real-estate-account-reviews.html">
                    <i class="fi-star opacity-60 me-2"></i>Reviews
                </a>
                <a class="card-nav-link" href="real-estate-account-notifications.html">
                    <i class="fi-bell opacity-60 me-2"></i>Notifications
                </a>
                <a class="card-nav-link" href="real-estate-help-center.html">
                    <i class="fi-help opacity-60 me-2"></i>Help
                </a> -->

                <a class="card-nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign Out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</aside>