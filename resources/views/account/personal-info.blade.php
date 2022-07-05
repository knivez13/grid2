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
            Personal Info
        </li>
    </ol>
</nav>
<div class="row">
    @include('account.account-nav')
    <div class="col-lg-8 col-md-7 mb-5">
        <h1 class="h2">Personal Info</h1>
        
        @include('components.alert')
        {!! Form::open(['route' => ['profileupdate'], 'method' => 'PATCH', 'enctype' => 'multipart/form-data']) !!}
        <label class="form-label pt-2" for="account-bio">Short bio</label>
        <div class="row pb-2">
            <div class="col-lg-9 col-sm-8 mb-4">
                {!! Form::textarea('bio', $data->bio, ['id'=>'account-bio','class' => 'form-control form-control-sm','rows'=>'6','placeholder'=>'Write your bio here. It will be displayed on your public profile.']) !!}
            </div>
            <div class="col-lg-3 col-sm-4 mb-4">
                <!-- <input name="picture" class="file-uploader bg-secondary" type="file" accept="image/png, image/jpeg" data-label-idle='<i class="d-inline-block fi-camera-plus fs-2 text-muted mb-2"></i><br><span class="fw-bold">Change picture</span>' data-style-panel-layout="compact" data-image-preview-height="160" data-image-crop-aspect-ratio="1:1" data-image-resize-target-width="200" data-image-resize-target-height="200"> -->

                {!! Form::file('picture', null, ['class' => 'file-uploader bg-secondary','accept'=>['image/png', 'image/jpeg', 'image/jpg']]) !!}
            </div>
        </div>
        <div class="border rounded-3 p-3 mb-4" id="personal-info">
            <!-- Name-->
            <div class="border-bottom pb-3 mb-3">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="pe-2">
                        <label class="form-label fw-bold">Full name</label>
                        <div id="name-value">{{ $data->name }}</div>
                    </div>
                    <div class="me-n3" data-bs-toggle="tooltip" title="Edit">
                        <a class="nav-link py-0" href="#name-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a>
                    </div>
                </div>
                <div class="collapse" id="name-collapse" data-bs-parent="#personal-info">
                    {!! Form::text('name', $data->name , ['class' => 'form-control form-control-sm mt-3','data-bs-binded-element' => '#name-value','data-bs-unset-value' => 'Not specified']) !!}
                </div>
            </div>
            <!-- Email-->
            <div class="border-bottom pb-3 mb-3">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="pe-2">
                        <label class="form-label fw-bold">Email</label>
                        <div id="email-value">{{ $data->email }}</div>
                    </div>
                    <div class="me-n3" data-bs-toggle="tooltip" title="Edit">
                        <a class="nav-link py-0" href="#email-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a>
                    </div>
                </div>
                <div class="collapse" id="email-collapse" data-bs-parent="#personal-info">
                    {!! Form::email('email', $data->email , ['class' => 'form-control form-control-sm mt-3','data-bs-binded-element' => '#email-value','data-bs-unset-value' => 'Not specified']) !!}
                </div>
            </div>
            <!-- Phone number-->
            <div class="border-bottom pb-3 mb-3">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="pe-2">
                        <label class="form-label fw-bold">Phone number</label>
                        <div id="phone-value">{{ $data->contact_number ? $data->contact_number : 'Not specified' }}</div>
                    </div>
                    <div class="me-n3" data-bs-toggle="tooltip" title="Edit">
                        <a class="nav-link py-0" href="#phone-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a>
                    </div>
                </div>
                <div class="collapse" id="phone-collapse" data-bs-parent="#personal-info">
                    {!! Form::text('contact_number', $data->contact_number , ['class' => 'form-control form-control-sm mt-3','data-bs-binded-element' => '#phone-value','data-bs-unset-value' => 'Not specified']) !!}
                </div>
            </div>
            <!-- Company name-->
            <div class="border-bottom pb-3 mb-3">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="pe-2">
                        <label class="form-label fw-bold">Company name</label>
                        <div id="company-value">{{ $data->company_name ? $data->company_name : 'Not specified' }}</div>
                    </div>
                    <div class="me-n3" data-bs-toggle="tooltip" title="Edit">
                        <a class="nav-link py-0" href="#company-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a>
                    </div>
                </div>
                <div class="collapse" id="company-collapse" data-bs-parent="#personal-info">
                    {!! Form::text('contact_name', $data->contact_name , ['class' => 'form-control form-control-sm mt-3','data-bs-binded-element' => '#company-value','data-bs-unset-value' => 'Not specified']) !!}
                </div>
            </div>
            <!-- Address-->
            <div class="border-bottom pb-3 mb-3">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="pe-2">
                        <label class="form-label fw-bold">Address</label>
                        <div id="address-value">{{ $data->address ? $data->address : 'Not specified' }}</div>
                    </div>
                    <div class="me-n3" data-bs-toggle="tooltip" title="Edit">
                        <a class="nav-link py-0" href="#address-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a>
                    </div>
                </div>
                <div class="collapse" id="address-collapse" data-bs-parent="#personal-info">
                    {!! Form::text('address', $data->address , ['class' => 'form-control form-control-sm mt-3','data-bs-binded-element' => '#address-value','data-bs-unset-value' => 'Not specified']) !!}
                </div>
            </div>

            <div class="border-bottom pb-3 mb-3">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="pe-2">
                        <label class="form-label fw-bold">Bank Details</label>
                        <div id="bank-value">{{ $data->bank_details ? $data->bank_details : 'Not specified' }}</div>
                    </div>
                    <div class="me-n3" data-bs-toggle="tooltip" title="Edit">
                        <a class="nav-link py-0" href="#bank-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a>
                    </div>
                </div>
                <div class="collapse" id="bank-collapse" data-bs-parent="#personal-info">
                    {!! Form::text('bank_details', $data->bank_details , ['class' => 'form-control form-control-sm mt-3','data-bs-binded-element' => '#bank-value','data-bs-unset-value' => 'Not specified']) !!}
                </div>
            </div>

            <div>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="pe-2">
                        <label class="form-label fw-bold">Cypto Wallet</label>
                        <div id="crypto-value">{{ $data->crypto_wallet ? $data->crypto_wallet : 'Not specified' }}</div>
                    </div>
                    <div class="me-n3" data-bs-toggle="tooltip" title="Edit">
                        <a class="nav-link py-0" href="#crypto-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a>
                    </div>
                </div>
                <div class="collapse" id="crypto-collapse" data-bs-parent="#personal-info">
                    {!! Form::text('crypto_wallet', $data->crypto_wallet , ['class' => 'form-control form-control-sm mt-3','data-bs-binded-element' => '#crypto-value','data-bs-unset-value' => 'Not specified']) !!}
                </div>
            </div>
        </div>
        <!-- Socials-->
        <div class="pt-2">
            <label class="form-label fw-bold mb-3">Socials</label>
        </div>
        <div class="d-flex align-items-center mb-3">
            <div class="btn btn-icon btn-light btn-xs shadow-sm rounded-circle pe-none flex-shrink-0 me-3">
                <i class="fi-facebook text-body"></i>
            </div>
            {!! Form::text('facebook', $data->facebook , ['class' => 'form-control form-control-sm','placeholder' => 'Your Facebook account']) !!}
        </div>
        <div class="d-flex align-items-center mb-3">
            <div class="btn btn-icon btn-light btn-xs shadow-sm rounded-circle pe-none flex-shrink-0 me-3">
                <i class="fi-linkedin text-body"></i>
            </div>
            {!! Form::text('linkedin', $data->linkedin , ['class' => 'form-control form-control-sm','placeholder' => 'Your LinkedIn account']) !!}
        </div>
        <div class="d-flex align-items-center mb-3">
            <div class="btn btn-icon btn-light btn-xs shadow-sm rounded-circle pe-none flex-shrink-0 me-3">
                <i class="fi-twitter text-body"></i>
            </div>
            {!! Form::text('twitter', $data->twitter , ['class' => 'form-control form-control-sm','placeholder' => 'Your Twitter account']) !!}
        </div>
        <div class="collapse" id="showMoreSocials">
            <div class="d-flex align-items-center mb-3">
                <div class="btn btn-icon btn-light btn-xs shadow-sm rounded-circle pe-none flex-shrink-0 me-3">
                    <i class="fi-instagram text-body"></i>
                </div>
                {!! Form::text('instagram', $data->instagram , ['class' => 'form-control form-control-sm','placeholder' => 'Your Instagram account']) !!}
            </div>
            <div class="d-flex align-items-center mb-3">
                <div class="btn btn-icon btn-light btn-xs shadow-sm rounded-circle pe-none flex-shrink-0 me-3">
                    <i class="fi-pinterest text-body"></i>
                </div>
                {!! Form::text('pinterest', $data->pinterest , ['class' => 'form-control form-control-sm','placeholder' => 'Your Pinterest account']) !!}
            </div>
        </div>
        <a class="collapse-label collapsed d-inline-block fs-sm fw-bold text-decoration-none pt-2 pb-3" href="#showMoreSocials" data-bs-toggle="collapse" data-bs-label-collapsed="Show more" data-bs-label-expanded="Show less" role="button" aria-expanded="false" aria-controls="showMoreSocials"><i class="fi-arrow-down me-2"></i></a>
        <div class="d-flex align-items-center justify-content-between border-top mt-4 pt-4 pb-1">
            <button class="btn btn-outline-primary btn-sm px-3 px-sm-4" type="Submit">
                Save changes
            </button>
        </div>

        {!! Form::close() !!}

    </div>
</div>
@endsection