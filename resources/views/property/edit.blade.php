@extends('layouts.realstate')

@section('content')
<div class="row">
    <!-- Page content-->
    <div class="col-lg-8">
        <!-- Breadcrumb-->
        <nav class="mb-3 pt-md-3" aria-label="Breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Edit property
                </li>
            </ol>
        </nav>

        <!-- Title-->
        <div class="mb-4">
            <h1 class="h2 mb-0">Edit property</h1>
            @include('components.alert')

            <div class="d-lg-none pt-3 mb-2">Content Filled</div>
            <div class="progress d-lg-none mb-4" style="height: 0.25rem">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <form action="{{ route('property.update',$data->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <!-- Basic info-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="basic-info">
                <h2 class="h4 mb-4">
                    <i class="fi-info-circle text-primary fs-5 mt-n1 me-2"></i>Basic Info
                </h2>
                <div class="mb-3">
                    <label class="form-label" for="ap-title">Title <span class="text-danger">*</span></label>
                    {!! Form::text('title', $data->title, ['id' => 'ap-title', 'class' => 'form-control form-control-sm' , 'required','placeholder'=>'Title for your property']) !!}
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-category">Listing Category <span class="text-danger">*</span></label>
                        {!! Form::select('listing_category_id',['' => 'Select'] + $listing, $data->listingcategory->name , ['class' => 'form-control form-control-sm' ,'id' => 'ap-category', 'required' ]) !!}
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-type">Property type <span class="text-danger">*</span></label>
                        {!! Form::select('property_type_id', ['' => 'Select'] + $propertytype , $data->propertytype->name, ['class' => 'form-control form-control-sm' ,'id' => 'ap-type', 'required' ]) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-ltype">Listing Type <span class="text-danger">*</span></label>
                        {!! Form::select('listing_type_id',['' => 'Select'] + $type, $data->listingtype->name, ['class' => 'form-control form-control-sm' ,'id' => 'ap-ltype', 'required' ]) !!}

                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-status">Property Status <span class="text-danger">*</span></label>
                        {!! Form::select('property_status_id',['' => 'Select'] + $status, $data->status->name, ['class' => 'form-control form-control-sm' ,'id' => 'ap-status', 'required' ]) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-ltype">Priority <span class="text-danger">*</span></label>
                        {!! Form::select('priority_id',['' => 'Select'] + $priority, $data->priority->name, ['class' => 'form-control form-control-sm' , 'required' ]) !!}

                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-status">Priority Under<span class="text-danger">*</span></label>
                        {!! Form::select('property_under_id',['' => 'Select'] + $priorityunder, $data->priorityunder->name, ['class' => 'form-control form-control-sm' , 'required' ]) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-ltype">Priority Under What? <span class="text-danger">*</span></label>
                        {!! Form::text('property_under_what', $data->property_under_what, [ 'class' => 'form-control form-control-sm', 'required']) !!}

                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-status">Reserve By<span class="text-danger">*</span></label>
                        {!! Form::text('reserve_by', $data->reserve_by, [ 'class' => 'form-control form-control-sm', 'required']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-title">Delivery Unit <span class="text-danger">*</span></label>
                        {!! Form::select('delivery_unit_id',['' => 'Select'] + $deliveryunit, $data->deliveryunit->name, ['class' => 'form-control form-control-sm' , 'required' ]) !!}
                    </div>
                </div>

            </section>

            <!-- Location-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="location">
                <h2 class="h4 mb-4">
                    <i class="fi-map-pin text-primary fs-5 mt-n1 me-2"></i>Location
                </h2>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-country">Country <span class="text-danger">*</span></label>
                        {!! Form::text('country', 'Philippines', ['class' => 'form-control form-control-sm' , 'disabled']) !!}
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-city">Province <span class="text-danger">*</span></label>
                        {!! Form::text('province', $data->province, ['class' => 'form-control form-control-sm' , 'required']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 mb-3">
                        <label class="form-label" for="ap-district">City / Municipality <span class="text-danger">*</span></label>
                        {!! Form::text('municipality', $data->municipality, ['class' => 'form-control form-control-sm' , 'required']) !!}
                    </div>
                    <div class="col-sm-5 mb-3">
                        <label class="form-label" for="ap-district">Barangay <span class="text-danger">*</span></label>
                        {!! Form::text('barangay', $data->barangay, ['class' => 'form-control form-control-sm' , 'required']) !!}
                    </div>
                    <div class="col-sm-2 mb-3">
                        <label class="form-label" for="ap-zip">Zip code <span class="text-danger">*</span></label>
                        {!! Form::text('zipcode', $data->zipcode, ['class' => 'form-control form-control-sm' , 'required']) !!}
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="ap-address">Street address <span class="text-danger">*</span></label>
                    {!! Form::text('address', $data->address, ['class' => 'form-control form-control-sm' , 'required']) !!}
                </div>
            </section>
            <!-- Property details-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="details">
                <h2 class="h4 mb-4">
                    <i class="fi-edit text-primary fs-5 mt-n1 me-2"></i>Property details
                </h2>
                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <label class="form-label" for="ap-title">Title No.<span class="text-danger">*</span></label>
                        {!! Form::text('title_number', $data->title_number, [ 'class' => 'form-control form-control-sm', 'required']) !!}
                    </div>
                    <div class="col-sm-4 mb-3">
                        <label class="form-label" for="ap-title">Tax Dec. No.<span class="text-danger">*</span></label>
                        {!! Form::text('tax_dec_number', $data->tax_dec_number, [ 'class' => 'form-control form-control-sm', 'required']) !!}
                    </div>
                    <div class="col-sm-4 mb-3">
                        <label class="form-label" for="ap-title">Unit Letter</label>
                        {!! Form::text('unit_letter', $data->unit_letter, [ 'class' => 'form-control form-control-sm']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-title">Total area, sq.m<span class="text-danger">*</span></label>
                        {!! Form::number('lot_area', $data->lot_area, [ 'class' => 'form-control form-control-sm', 'required']) !!}
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-title">Price / sq.m<span class="text-danger">*</span></label>
                        {!! Form::number('price_per_square', $data->price_per_square, [ 'class' => 'form-control form-control-sm', 'required']) !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3 mb-3">
                        <label class="form-label" for="ap-title">No. of Units</label>
                        {!! Form::number('number_of_unit', $data->number_of_unit, [ 'class' => 'form-control form-control-sm']) !!}
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label class="form-label" for="ap-title">No. of Rooms</label>
                        {!! Form::number('number_of_room', $data->number_of_room, [ 'class' => 'form-control form-control-sm']) !!}
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label class="form-label" for="ap-title">No. of Bedrooms</label>
                        {!! Form::number('number_of_bedroom', $data->number_of_bedroom, [ 'class' => 'form-control form-control-sm']) !!}
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label class="form-label" for="ap-title">No. of Bathroom</label>
                        {!! Form::number('number_of_bathroom', $data->number_of_bathroom, [ 'class' => 'form-control form-control-sm']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 mb-3">
                        <label class="form-label" for="ap-title">No. of Floors</label>
                        {!! Form::number('number_of_floor', $data->number_of_floor, [ 'class' => 'form-control form-control-sm']) !!}
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label class="form-label" for="ap-title">No. of Kitchens</label>
                        {!! Form::number('number_of_kitchen', $data->number_of_kitchen, [ 'class' => 'form-control form-control-sm']) !!}
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label class="form-label" for="ap-title">No. of Parking Slot</label>
                        {!! Form::number('number_of_parking', $data->number_of_parking, [ 'class' => 'form-control form-control-sm']) !!}
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label class="form-label" for="ap-title">No. of Maidroom</label>
                        {!! Form::number('number_of_maid_room', $data->number_of_maid_room, [ 'class' => 'form-control form-control-sm']) !!}
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label d-block fw-bold mb-2 pb-1">Amenities</label>
                    <div class="row">
                        @foreach($aminity as $value)
                        <div class="col-sm-4">
                            <div class="form-check">
                                {!! Form::checkbox('aminity[]', $value->id, in_array($value->id, $paminity) ? true : false, ['class' => 'form-check-input','for'=>'form-check-{{$value->id}}']) !!}
                                <label class="form-check-label" for="form-check-{{$value->id}}">{{ $value->name }}</label>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label d-block fw-bold mb-2 pb-1">Near Location</label>
                    <div class="row">
                        @foreach($nearlocation as $value)
                        <div class="col-sm-4">
                            <div class="form-check">
                                {!! Form::checkbox('nearlocation[]', $value->id, in_array($value->id, $pnearlocation) ? true : false, ['class' => 'form-check-input','for'=>'form-check-{{$value->id}}']) !!}
                                <label class="form-check-label" for="form-check-{{$value->id}}">{{ $value->name }}</label>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <label class="form-label" for="ap-description">Description<span class="text-danger">*</span></label>
                {!! Form::textarea('description', $data->description, ['id'=>'account-bio','class' => 'form-control form-control-sm','rows'=>'5','placeholder'=>'Describe your property', 'required']) !!}
            </section>
            <!-- Price-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="price">
                <h2 class="h4 mb-4">
                    <i class="fi-cash text-primary fs-5 mt-n1 me-2"></i>Price
                </h2>
                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <label class="form-label" for="ap-title">Asking Price<span class="text-danger">*</span></label>
                        {!! Form::number('asking_price', $data->asking_price, [ 'class' => 'form-control form-control-sm', 'required']) !!}
                    </div>
                    <div class="col-sm-4 mb-3">
                        <label class="form-label" for="ap-title">Last Price<span class="text-danger">*</span></label>
                        {!! Form::number('last_price', $data->last_price, [ 'class' => 'form-control form-control-sm', 'required']) !!}
                    </div>
                    <div class="col-sm-4 mb-3">
                        <label class="form-label" for="ap-title">Leasing Price<span class="text-danger">*</span></label>
                        {!! Form::number('leasing_price', $data->leasing_price, [ 'class' => 'form-control form-control-sm', 'required']) !!}
                    </div>
                </div>
            </section>
            <!-- Photos / video-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="photos">
                <h2 class="h4 mb-4">
                    <i class="fi-image text-primary fs-5 mt-n1 me-2"></i>Photos /
                    video
                </h2>

                <div class="alert alert-info mb-4" role="alert">
                    <div class="d-flex">
                        <i class="fi-alert-circle me-2 me-sm-3"></i>
                        <p class="fs-sm mb-1">
                            Other Picture <br />
                            The maximum photo size is 5 MB. Formats: jpeg, jpg, png.<br />
                            <!-- The maximum video size is 15 MB. Formats: mpeg, ogg, mp4, webm, 3gp, mov, flv, avi, wmv, ts.<br /> -->
                        </p>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="ap-country">Cover Photo</label>
                    {{ Form::file('coverphoto', array('class'=>'form-control form-control-sm ','accept'=>'image/*'));  }}

                </div>
                <div class="mb-3">
                    <label class="form-label" for="ap-country">Other Photo</label>
                    {{ Form::file('stock_image[]', array('class'=>'form-control form-control-sm file','multiple'=>true,'accept'=>'image/*'));  }}
                </div>
            </section>
            <!-- Contacts-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="contacts">
                <h2 class="h4 mb-4">
                    <i class="fi-phone text-primary fs-5 mt-n1 me-2"></i>Contacts
                </h2>
                <div class="mb-3">
                    <label class="form-label" for="ap-title">Owner Name <span class="text-danger">*</span></label>
                    {!! Form::text('owner', $data->owner, [ 'class' => 'form-control form-control-sm' , 'required']) !!}
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-email">Email<span class="text-danger">*</span></label>
                        {!! Form::email('email', $data->email, [ 'class' => 'form-control form-control-sm' , 'required']) !!}
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-phone">Phone number <span class="text-danger">*</span></label>
                        {!! Form::text('contact_number', $data->contact_number, [ 'class' => 'form-control form-control-sm' , 'required']) !!}
                    </div>
                </div>
                <label class="form-label" for="ap-company-name">Company</label>
                {!! Form::text('company_name', $data->company_name, [ 'class' => 'form-control form-control-sm' , 'required']) !!}
            </section>

            <section class="card card-body border-0 shadow-sm p-4 mb-4">
                <h2 class="h4 mb-4">
                    <i class="fi-plus text-primary fs-5 mt-n1 me-2"></i>Additional Fields
                </h2>
                <input type="hidden" id="count_hidden" value="{{count($addfield)+1}}">
                <table class="table table-sm" id="dynamicAddRemove">
                    <tr>
                        <th>Field Name</th>
                        <th>Value</th>
                        <th>Action</th>
                    </tr>
                    @if($addfield)
                    @foreach($addfield as $value)
                    <tr>
                        <td><input type="text" name="addfield[{{$loop->index+1}}]" value="{{$value->addfield}}" class="form-control form-control-sm"></td>
                        <td><input type="text" name="addvalue[{{$loop->index+1}}]" value="{{$value->addvalue}}" class="form-control form-control-sm"></td>
                        <td><input type="button" class="btn btn-danger btn-sm btn-lg d-block mb-2 remove-input-field" value="Remove"></td>
                    </tr>
                    @endforeach
                    @endif
                </table>

                <input class="btn btn-primary btn-sm btn-lg d-block mb-2" id="dynamic-ar" type="button" value="add fields">

            </section>
            <!-- Action buttons -->
            <section class="d-sm-flex justify-content-between pt-2">
                <button class="btn btn-primary btn-sm btn-lg d-block mb-2" type="submit">Save</button>
            </section>
        </form>


    </div>
    <!-- Progress of completion-->
    <aside class="col-lg-3 offset-lg-1 d-none d-lg-block">
        <div class="sticky-top pt-5">
            <h6 class="pt-5 mt-3 mb-2">Content Filled</h6>
            <div class="progress mb-4" style="height: 0.25rem">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <ul class="list-unstyled">
                <li class="d-flex align-items-center">
                    <a class="nav-link fw-normal ps-1 p-0" href="#basic-info" data-scroll data-scroll-offset="20">Basic info</a>
                </li>
                <li class="d-flex align-items-center">
                    <a class="nav-link fw-normal ps-1 p-0" href="#location" data-scroll data-scroll-offset="20">Location</a>
                </li>
                <li class="d-flex align-items-center">
                    <a class="nav-link fw-normal ps-1 p-0" href="#details" data-scroll data-scroll-offset="20">Property details</a>
                </li>
                <li class="d-flex align-items-center">
                    <a class="nav-link fw-normal ps-1 p-0" href="#price" data-scroll data-scroll-offset="20">Price</a>
                </li>
                <li class="d-flex align-items-center">
                    <a class="nav-link fw-normal ps-1 p-0" href="#photos" data-scroll data-scroll-offset="20">Photos / video</a>
                </li>
                <li class="d-flex align-items-center">
                    <a class="nav-link fw-normal ps-1 p-0" href="#contacts" data-scroll data-scroll-offset="20">Contacts</a>
                </li>
            </ul>
        </div>
    </aside>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        var a = $('#count_hidden').val();
        var i = a;
        $("#dynamic-ar").click(function() {
            $("#dynamicAddRemove").append('<tr><td><input type="text" name="addfield[' + i + ']" class="form-control form-control-sm"></td><td><input type="text" name="addvalue[' + i + ']" class="form-control form-control-sm"></td><td><input type="button" class="btn btn-danger btn-sm btn-lg d-block mb-2 remove-input-field" value="Remove"></td></tr>');
            ++i;
        });
        $(document).on('click', '.remove-input-field', function() {
            $(this).parents('tr').remove();
        });
    });
</script>
@endsection