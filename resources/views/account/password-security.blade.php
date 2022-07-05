@extends('layouts.realstate')

@section('content')
<nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="/account/personal-info">Account</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            Password &amp; Security
        </li>
    </ol>
</nav>
<div class="row">
    @include('account.account-nav')
    <div class="col-lg-8 col-md-7 mb-5">
        <h1 class="h2">Password &amp; Security</h1>
        <p class="pt-1">Manage your password settings and secure your account.</p>
        @include('components.alert')
        <h2 class="h5">Password</h2>
        {!! Form::open(['route' => 'updatepassword', 'method' => 'PATCH', 'class' => 'needs-validation','novalidate' ]) !!}

        <div class="row align-items-end mb-2">
            <div class="col-sm-6 mb-2">
                <label class="form-label" for="account-password">Current password</label>
                <div class="password-toggle">
                    {!! Form::password('current_password',['id' => 'account-password', 'class' => 'form-control form-control-sm','required']) !!}
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                        <input class="password-toggle-check" type="checkbox">
                        <span class="password-toggle-indicator"></span>
                    </label>
                </div>
            </div>
            <!-- <div class="col-sm-6 mb-2"><a class="d-inline-block mb-2" href="#">Forgot password?</a></div> -->
        </div>
        <div class="row mb-2">
            <div class="col-sm-6 mb-3">
                <label class="form-label" for="account-password-new">New password</label>
                <div class="password-toggle">
                    {!! Form::password('new_password',['id' => 'account-password-new', 'class' => 'form-control form-control-sm','required']) !!}
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                        <input class="password-toggle-check" type="checkbox">
                        <span class="password-toggle-indicator"></span>
                    </label>
                </div>
            </div>
            <div class="col-sm-6 mb-3">
                <label class="form-label" for="account-password-confirm">Confirm password</label>
                <div class="password-toggle">
                    {!! Form::password('new_confirm_password',['id' => 'account-password-confirm', 'class' => 'form-control form-control-sm','required']) !!}
                    <label class="password-toggle-btn" aria-label="Show/hide password">
                        <input class="password-toggle-check" type="checkbox">
                        <span class="password-toggle-indicator"></span>
                    </label>
                </div>
            </div>
        </div>
        <button class="btn btn-outline-primary btn-sm" type="submit">Update password</button>
        {!! Form::close() !!}
        <div class="border-top pt-4 mt-3"></div>
        <h2 class="h5 pt-2 mb-4">Where you're signed in on</h2>
        <div class="d-flex border-bottom pb-3 mb-3"><i class="fi-device-desktop fs-5 text-muted me-1"></i>
            <div class="ps-2">
                <div class="fw-bold mb-1">Mac – New York, USA</div><span class="d-inline-block fs-sm text-muted border-end pe-2 me-2">Chrome</span><span class="fs-sm fw-bold text-success">Active now</span>
            </div>
        </div>
        <div class="d-flex border-bottom pb-3 mb-3"><i class="fi-device-mobile fs-5 text-muted me-1"></i>
            <div class="ps-2">
                <div class="fw-bold mb-1">iPhone 12 – New York, USA</div><span class="d-inline-block fs-sm text-muted border-end pe-2 me-2">Finder App</span><span class="fs-sm text-muted">20 hours ago</span>
            </div>
            <div class="align-self-center ms-auto">
                <div class="dropdown">
                    <button class="btn btn-icon btn-light btn-xs rounded-circle shadow-sm" type="button" id="contextMenu1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fi-dots-vertical"></i></button>
                    <ul class="dropdown-menu pb-3 my-1" aria-labelledby="contextMenu1">
                        <li><a class="dropdown-item text-body" href="#">Not you?</a></li>
                        <li><a class="d-block px-3" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="d-flex border-bottom pb-3 mb-3"><i class="fi-device-desktop fs-5 text-muted me-1"></i>
            <div class="ps-2">
                <div class="fw-bold mb-1">Windows 10.1 – New York, USA</div><span class="d-inline-block fs-sm text-muted border-end pe-2 me-2">Chrome</span><span class="fs-sm text-muted">November 15 at 8:42 AM</span>
            </div>
            <div class="align-self-center ms-auto">
                <div class="dropdown">
                    <button class="btn btn-icon btn-light btn-xs rounded-circle shadow-sm" type="button" id="contextMenu2" data-bs-toggle="dropdown" aria-expanded="false"><i class="fi-dots-vertical"></i></button>
                    <ul class="dropdown-menu pb-3 my-1" aria-labelledby="contextMenu2">
                        <li><a class="dropdown-item text-body" href="#">Not you?</a></li>
                        <li><a class="d-block px-3" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div><a class="d-inline-block fw-bold text-decoration-none mt-3" href="#">Sign out of all sessions </a>
    </div>

</div>
@endsection