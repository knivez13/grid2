<?php

namespace App\Http\Controllers;

use App\Models\Aminity;
use App\Models\DeliveryUnit;
use App\Models\ListingCategory;
use App\Models\ListingType;
use App\Models\NearLocation;
use App\Models\Priority;
use App\Models\PriorityUnder;
use App\Models\PropertyList;
use App\Models\PropertyStatus;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use Auth;

class PropertyListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('property.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listing = ListingCategory::where('status', '1')->pluck('name', 'name')->all();
        $deliveryunit = DeliveryUnit::where('status', '1')->pluck('name', 'name')->all();
        $priority = Priority::where('status', '1')->pluck('name', 'name')->all();
        $priorityunder = PriorityUnder::where('status', '1')->pluck('name', 'name')->all();
        $type = ListingType::where('status', '1')->pluck('name', 'name')->all();
        $status = PropertyStatus::where('status', '1')->pluck('name', 'name')->all();
        $propertytype = PropertyType::where('status', '1')->pluck('name', 'name')->all();

        $nearlocation = NearLocation::where('status', '1')->get();
        $aminity = Aminity::where('status', '1')->get();

        return view('property.create', compact('listing', 'deliveryunit', 'priority', 'priorityunder', 'type', 'status', 'status', 'propertytype', 'nearlocation', 'aminity'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:property_lists,title',
        ]);

        $listing = ListingCategory::where('name', $request->get('listing_category_id'))->first();
        $deliveryunit = DeliveryUnit::where('name', $request->get('delivery_unit_id'))->first();
        $priority = Priority::where('name', $request->get('priority_id'))->first();
        $priorityunder = PriorityUnder::where('name', $request->get('property_under_id'))->first();
        $type = ListingType::where('name', $request->get('listing_type_id'))->first();
        $status = PropertyStatus::where('name', $request->get('property_status_id'))->first();
        $propertytype = PropertyType::where('name', $request->get('property_type_id'))->first();

        $data = new PropertyList([
            'title' => $request->get('title'),
            'address' => $request->get('address'),
            'country_id' => $request->get('country_id'),
            'state_id' => $request->get('state_id'),
            'city_id' => $request->get('city_id'),
            'property_type_id' => $propertytype->id,
            'listing_category_id' => $listing->id,
            'listing_type_id' => $type->id,
            'property_status_id' => $status->id,
            'priority_id' => $priority->id,
            'property_under_id' => $priorityunder->id,
            'delivery_unit_id' => $deliveryunit->id,
            'property_under_what' => $request->get('property_under_what'),
            'reserve_by' => $request->get('reserve_by'),
            'asking_price' => $request->get('asking_price'),
            'last_price' => $request->get('last_price'),
            'leasing_price' => $request->get('leasing_price'),
            'price_per_square' => $request->get('price_per_square'),
            'lot_area' => $request->get('lot_area'),
            'number_of_unit' => $request->get('number_of_unit'),
            'number_of_room' => $request->get('number_of_room'),
            'number_of_bedroom' => $request->get('number_of_bedroom'),
            'number_of_bathroom' => $request->get('number_of_bathroom'),
            'number_of_floor' => $request->get('number_of_floor'),
            'number_of_kitchen' => $request->get('number_of_kitchen'),
            'number_of_parking' => $request->get('number_of_parking'),
            'number_of_maid_room' => $request->get('number_of_maid_room'),
            'title_number' => $request->get('title_number'),
            'tax_dec_number' => $request->get('tax_dec_number'),
            'unit_letter' => $request->get('unit_letter'),
            'owner' => $request->get('owner'),
            'contact_number' => $request->get('contact_number'),
            'description' => $request->get('description'),
            'company_name' => $request->get('company_name'),
            'email' => $request->get('email'),
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,

        ]);

        $data->save(); // Finally, save the record.

        return back()->with('success', 'Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyList  $propertyList
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyList $propertyList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyList  $propertyList
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyList $propertyList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PropertyList  $propertyList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PropertyList $propertyList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyList  $propertyList
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyList $propertyList)
    {
        //
    }
}