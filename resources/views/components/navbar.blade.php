<div class="collapse navbar-collapse order-lg-2" id="navbarNav">
    <ul class="navbar-nav navbar-nav-scroll" style="max-height: 35rem">
        <li class="nav-item">
            <a class="nav-link {{(strpos(Route::currentRouteName(), 'home') === 0) ? 'active' : ''}}" href="{{ route('welcome') }}" role="button">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Catalog</a>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="#">Property for Rent</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Property for Sale</a>
                </li>
            </ul>
        </li>
        @guest
        @else
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Real State</a>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item {{(strpos(Route::currentRouteName(), 'aminity.index') === 0) ? 'active' : ''}}" href="{{ route('aminity.index') }}">Aminity</a>
                </li>
                <li>
                    <a class="dropdown-item {{(strpos(Route::currentRouteName(), 'near-location.index') === 0) ? 'active' : ''}}" href="{{ route('near-location.index') }}">Near Location</a>
                </li>
                <li>
                    <a class="dropdown-item {{(strpos(Route::currentRouteName(), 'property-type.index') === 0) ? 'active' : ''}}" href="{{ route('property-type.index') }}">Property Type</a>
                </li>
                <li>
                    <a class="dropdown-item {{(strpos(Route::currentRouteName(), 'delivery-unit.index') === 0) ? 'active' : ''}}" href="{{ route('delivery-unit.index') }}">Delivery Units</a>
                </li>
                <li>
                    <a class="dropdown-item {{(strpos(Route::currentRouteName(), 'priority.index') === 0) ? 'active' : ''}}" href="{{ route('priority.index') }}">Priority</a>
                </li>
                <li>
                    <a class="dropdown-item {{(strpos(Route::currentRouteName(), 'priority-under.index') === 0) ? 'active' : ''}}" href="{{ route('priority-under.index') }}">Priority Under</a>
                </li>
                <li>
                    <a class="dropdown-item {{(strpos(Route::currentRouteName(), 'property-status.index') === 0) ? 'active' : ''}}" href="{{ route('property-status.index') }}">Status</a>
                </li>
                <li>
                    <a class="dropdown-item {{(strpos(Route::currentRouteName(), 'listing-category.index') === 0) ? 'active' : ''}}" href="{{ route('listing-category.index') }}">Listing Category</a>
                </li>
                <li>
                    <a class="dropdown-item {{(strpos(Route::currentRouteName(), 'listing-type.index') === 0) ? 'active' : ''}}" href="{{ route('listing-type.index') }}">Listing Type</a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Location</a>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item {{(strpos(Route::currentRouteName(), 'country.index') === 0) ? 'active' : ''}}" href="{{ route('country.index') }}">Country</a>
                </li>
                <li>
                    <a class="dropdown-item {{(strpos(Route::currentRouteName(), 'state.index') === 0) ? 'active' : ''}}" href="{{ route('state.index') }}">State</a>
                </li>
                <li>
                    <a class="dropdown-item {{(strpos(Route::currentRouteName(), 'city.index') === 0) ? 'active' : ''}}" href="{{ route('city.index') }}">City</a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">User Management</a>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item {{(strpos(Route::currentRouteName(), 'user.index') === 0) ? 'active' : ''}}" href="{{ route('user.index') }}">User List</a>
                </li>
                <li>
                    <a class="dropdown-item {{(strpos(Route::currentRouteName(), 'roles.index') === 0) ? 'active' : ''}}" href="{{ route('roles.index') }}">Roles</a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown d-lg-none">
            <a class="nav-link dropdown-toggle d-flex align-items-center" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="rounded-circle me-2" src="/upload/avatar/{{ Auth::user()->picture ? Auth::user()->picture :'avatar.png' }}" width="30" alt="{{ Auth::user()->name }}" />{{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu">
                <div class="ps-3">
                    <!-- <span class="star-rating star-rating-sm">
                        <i class="star-rating-icon fi-star-filled active"></i>
                        <i class="star-rating-icon fi-star-filled active"></i>
                        <i class="star-rating-icon fi-star-filled active"></i>
                        <i class="star-rating-icon fi-star-filled active"></i>
                        <i class="star-rating-icon fi-star-filled active"></i>
                    </span> -->
                    <div class="fs-xs py-2">
                        {{ Auth::user()->email }}<br /> {{ Auth::user()->contact_number ? Auth::user()->contact_number : ''}}
                    </div>
                </div>
                <a class="dropdown-item {{(strpos(Route::currentRouteName(), 'personalinfo') === 0) ? 'active' : ''}}" href="{{ route('personalinfo') }}">
                    <i class="fi-user opacity-60 me-2"></i>Personal Info
                </a>
                <a class="dropdown-item {{(strpos(Route::currentRouteName(), 'passwordsecurity') === 0) ? 'active' : ''}}" href="{{ route('passwordsecurity') }}">
                    <i class="fi-lock opacity-60 me-2"></i>Password &amp; Security
                </a>
                <a class="dropdown-item {{(strpos(Route::currentRouteName(), 'myproperty') === 0) ? 'active' : ''}}" href="{{ route('myproperty') }}">
                    <i class="fi-home opacity-60 me-2"></i>My Properties
                </a>
                <a class="dropdown-item {{(strpos(Route::currentRouteName(), 'wishlist') === 0) ? 'active' : ''}}" href="{{ route('wishlist') }}">
                    <i class="fi-heart opacity-60 me-2"></i>Wishlist
                </a>
                <!-- <a class="dropdown-item" href="real-estate-account-reviews.html">
                    <i class="fi-star opacity-60 me-2"></i>Reviews
                </a>
                <a class="dropdown-item" href="real-estate-account-notifications.html">
                    <i class="fi-bell opacity-60 me-2"></i>Notifications
                </a> -->
                <div class="dropdown-divider"></div>
                <!-- <a class="dropdown-item" href="real-estate-help-center.html">Help</a> -->
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign Out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        @endguest
    </ul>
</div>