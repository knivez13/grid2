<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>Finder | Real Estate</title>
    <!-- SEO Meta Tags-->
    <meta name="author" content="Bonjour De Guzman" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}" />
    <link rel="manifest" href="site.webmanifest" />
    <link rel="mask-icon" color="#5bbad5" href="{{ asset('favicon-16x16.png') }}" />

    <meta name="msapplication-TileColor" content="#766df4" />
    <meta name="theme-color" content="#ffffff" />
    @include('components.css')
</head>

<body>
    <!-- Page loading spinner-->
    <div class="page-loading active">
        <div class="page-loading-inner">
            <div class="page-spinner"></div>
            <span>Loading...</span>
        </div>
    </div>
    <main class="page-wrapper">
        <!-- Navbar-->
        @include('components.sign-in')
        @include('components.sign-up')
        <header class="navbar navbar-expand-lg navbar-light bg-light fixed-top" data-scroll-header>
            <div class="container">
                <a class="navbar-brand me-3 me-xl-4" href="{{ route('welcome') }}">
                    <img src="{{ asset('img/logo/logo.svg') }}" width="50" alt="Grid Property" /> Grid Property
                </a>
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @guest
                <a class="btn btn-sm text-primary d-none d-lg-block order-lg-3" href="#signin-modal" data-bs-toggle="modal"><i class="fi-user me-2"></i>Sign in</a>
                @else
                @include('components.round-avatar')
                <a class="btn btn-primary btn-sm ms-2 order-lg-3" href="{{ route('property.create') }}">
                    <i class="fi-plus me-2"></i>
                    <span class="d-none d-sm-inline">Add property</span>
                </a>
                @endguest
                @include('components.navbar')
            </div>
        </header>

        @if(strpos(Route::currentRouteName(), 'welcome') === 0)
        @yield('content')
        @elseif(strpos(Route::currentRouteName(), 'catalog') === 0)
        @yield('content')
        @elseif(strpos(Route::currentRouteName(), 'aboutus') === 0)
        @yield('content')
        @elseif(strpos(Route::currentRouteName(), 'contactus') === 0)
        @yield('content')
        @else
        <div class="container pt-5 pb-lg-4 mt-5 mb-sm-2">
            @yield('content')
        </div>
        @endif

    </main>
    <!-- Footer-->
    @include('components.footer')
    <a class="btn-scroll-top" href="#top" data-scroll>
        <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
        <i class="btn-scroll-top-icon fi-chevron-up"> </i>
    </a>
    @include('components.script')

    @yield('script')
</body>

</html>