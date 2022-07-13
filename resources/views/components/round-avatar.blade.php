<div class="dropdown d-none d-lg-block order-lg-3 my-n2 me-3">
    <a class="d-block py-2" href="javascript:void(0)"><img class="rounded-circle" src="/upload/avatar/{{ Auth::user()->picture ? Auth::user()->picture :'avatar.png' }}" width="40" alt="{{ Auth::user()->name }}" /></a>
    <div class="dropdown-menu dropdown-menu-end">
        <div class="d-flex align-items-start border-bottom px-3 py-1 mb-2" style="width: 16rem">
            <img class="rounded-circle" src="/upload/avatar/{{ Auth::user()->picture ? Auth::user()->picture :'avatar.png' }}" width="48" alt="{{ Auth::user()->name }}" />
            <div class="ps-2">
                <h6 class="fs-base mb-0">{{ Auth::user()->name }}</h6>
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
</div>