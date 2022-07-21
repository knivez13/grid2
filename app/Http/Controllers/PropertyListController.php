<?php

namespace App\Http\Controllers;

use App\Models\Aminity;
use App\Models\DeliveryUnit;
use App\Models\ListingCategory;
use App\Models\ListingType;
use App\Models\NearLocation;
use App\Models\Priority;
use App\Models\PriorityUnder;
use App\Models\PropertyAdditionalFields;
use App\Models\PropertyAminityMap;
use App\Models\PropertyList;
use App\Models\PropertyNearLocationMap;
use App\Models\PropertyPhoto;
use App\Models\PropertyStatus;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;

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
            'coverphoto' => 'required|image|mimes:jpeg,png,jpg|max:5048',
            'house_video' => 'mimes:mpeg,mp4,3gp,mov|max:15040',
        ]);

        $listing = ListingCategory::where('name', $request->get('listing_category_id'))->first();
        $deliveryunit = DeliveryUnit::where('name', $request->get('delivery_unit_id'))->first();
        $priority = Priority::where('name', $request->get('priority_id'))->first();
        $priorityunder = PriorityUnder::where('name', $request->get('property_under_id'))->first();
        $type = ListingType::where('name', $request->get('listing_type_id'))->first();
        $status = PropertyStatus::where('name', $request->get('property_status_id'))->first();
        $propertytype = PropertyType::where('name', $request->get('property_type_id'))->first();

        $request->coverphoto->store('coverphoto', 'public_uploads');
        if ($request->house_video) {
            $request->house_video->store('housevideos', 'public_uploads');
        }
        $data = new PropertyList([
            'title' => $request->get('title'),
            'title_slug' => Str::slug($request->get('title'), '-'),
            'address' => $request->get('address'),

            'country' => $request->get('country') ? $request->get('country') : 'Philippines',
            'province' => $request->get('province'),
            'municipality' => $request->get('municipality'),
            'barangay' => $request->get('barangay'),
            'zipcode' => $request->get('zipcode'),

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
            'coverphoto' => $request->coverphoto->hashName(),
            'house_video' => $request->house_video ? $request->house_video->hashName() : null,
            'email' => $request->get('email'),
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,

        ]);

        $data->save(); // Finally, save the record.

        if ($request->get('aminity')) {
            foreach ($request->get('aminity') as $id) {
                PropertyAminityMap::create([
                    'property_id' => $data->id,
                    'aminity_id' => $id,
                ]);
            }
        }

        if ($request->get('nearlocation')) {
            foreach ($request->get('nearlocation') as $id) {
                PropertyNearLocationMap::create([
                    'property_id' => $data->id,
                    'near_location_id' => $id,
                ]);
            }
        }

        if ($request->stock_image) {
            $allowedfileExtension = ['jpeg', 'png', 'jpg'];
            foreach ($request->stock_image as $photo) {
                $extension = $photo->getClientOriginalExtension();
                $check = in_array($extension, $allowedfileExtension);
                if ($check) {
                    $photo->store('housephoto', 'public_uploads');
                    PropertyPhoto::create([
                        'property_id' => $data->id,
                        'photo' => $photo ? $photo->hashName() : null,
                    ]);
                }
            }
        }

        if ($request->addfield) {
            $count = count($request->addfield);
            for ($i = 0; $i < $count; $i++) {
                if ($request->addfield && $request->addvalue) {
                    PropertyAdditionalFields::create([
                        'property_id' => $data->id,
                        'addfield' => $request->addfield[$i],
                        'addvalue' => $request->addvalue[$i]
                    ]);
                }
            }
        }
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
    public function edit($id)
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

        $data = PropertyList::query()
            ->find($id)
            ->with('propertytype')
            ->with('listingcategory')
            ->with('listingtype')
            ->with('deliveryunit')
            ->with('priority')
            ->with('priorityunder')
            ->with('status')
            ->with('agent')
            ->first();
        $photo = PropertyPhoto::where('property_id', $data->id)->get();
        $paminity = PropertyAminityMap::where('property_id', $data->id)->pluck('aminity_id', 'aminity_id')->all();
        $pnearlocation = PropertyNearLocationMap::where('property_id', $data->id)->pluck('near_location_id', 'near_location_id')->all();
        $addfield = PropertyAdditionalFields::where('property_id', $data->id)->get();
        return view('property.edit', compact('data', 'photo', 'paminity', 'pnearlocation', 'addfield', 'listing', 'deliveryunit', 'priority', 'priorityunder', 'type', 'status', 'propertytype', 'nearlocation', 'aminity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PropertyList  $propertyList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request->all();
        $this->validate($request, [
            'title' => 'required|unique:property_lists,title,' . $id,
            'coverphoto' => 'image|mimes:jpeg,png,jpg|max:5048',
            'house_video' => 'mimes:mpeg,mp4,3gp,mov|max:15040',
        ]);

        $listing = ListingCategory::where('name', $request->get('listing_category_id'))->first();
        $deliveryunit = DeliveryUnit::where('name', $request->get('delivery_unit_id'))->first();
        $priority = Priority::where('name', $request->get('priority_id'))->first();
        $priorityunder = PriorityUnder::where('name', $request->get('property_under_id'))->first();
        $type = ListingType::where('name', $request->get('listing_type_id'))->first();
        $status = PropertyStatus::where('name', $request->get('property_status_id'))->first();
        $propertytype = PropertyType::where('name', $request->get('property_type_id'))->first();

        if ($request->coverphoto) {
            $request->coverphoto->store('coverphoto', 'public_uploads');
        }
        if ($request->house_video) {
            $request->house_video->store('housevideos', 'public_uploads');
        }
        $data = PropertyList::find($id);
        $data->title = $request->get('title');
        $data->title_slug = Str::slug($request->get('title'), '-');
        $data->address = $request->get('address');

        $data->country = $request->get('country') ? $request->get('country') : 'Philippines';
        $data->province = $request->get('province');
        $data->municipality = $request->get('municipality');
        $data->barangay = $request->get('barangay');
        $data->zipcode = $request->get('zipcode');

        $data->property_type_id = $propertytype->id;
        $data->listing_category_id = $listing->id;
        $data->listing_type_id = $type->id;
        $data->property_status_id = $status->id;
        $data->priority_id = $priority->id;
        $data->property_under_id = $priorityunder->id;
        $data->delivery_unit_id = $deliveryunit->id;
        $data->property_under_what = $request->get('property_under_what');
        $data->reserve_by = $request->get('reserve_by');
        $data->asking_price = $request->get('asking_price');
        $data->last_price = $request->get('last_price');
        $data->leasing_price = $request->get('leasing_price');
        $data->price_per_square = $request->get('price_per_square');
        $data->lot_area = $request->get('lot_area');
        $data->number_of_unit = $request->get('number_of_unit');
        $data->number_of_room = $request->get('number_of_room');
        $data->number_of_bedroom = $request->get('number_of_bedroom');
        $data->number_of_bathroom = $request->get('number_of_bathroom');
        $data->number_of_floor = $request->get('number_of_floor');
        $data->number_of_kitchen = $request->get('number_of_kitchen');
        $data->number_of_parking = $request->get('number_of_parking');
        $data->number_of_maid_room = $request->get('number_of_maid_room');
        $data->title_number = $request->get('title_number');
        $data->tax_dec_number = $request->get('tax_dec_number');
        $data->unit_letter = $request->get('unit_letter');
        $data->owner = $request->get('owner');
        $data->contact_number = $request->get('contact_number');
        $data->description = $request->get('description');
        $data->company_name = $request->get('company_name');
        $data->coverphoto = $request->coverphoto ? $request->coverphoto->hashName() : $data->coverphoto;
        $data->house_video = $request->house_video ? $request->house_video->hashName() : $data->house_video;
        $data->email = $request->get('email');
        $data->updated_by = Auth::user()->id;

        $data->save(); // Finally, save the record.

        if ($request->get('aminity')) {
            PropertyAminityMap::where('property_id', $data->id)->delete();
            foreach ($request->get('aminity') as $aid) {
                PropertyAminityMap::create([
                    'property_id' => $data->id,
                    'aminity_id' => $aid,
                ]);
            }
        }

        if ($request->get('nearlocation')) {
            PropertyNearLocationMap::where('property_id', $data->id)->delete();

            foreach ($request->get('nearlocation') as $nid) {
                PropertyNearLocationMap::create([
                    'property_id' => $data->id,
                    'near_location_id' => $nid,
                ]);
            }
        }

        // if ($request->stock_image) {
        //     $allowedfileExtension = ['jpeg', 'png', 'jpg'];
        //     foreach ($request->stock_image as $photo) {
        //         $extension = $photo->getClientOriginalExtension();
        //         $check = in_array($extension, $allowedfileExtension);
        //         if ($check) {
        //             $photo->store('housephoto', 'public_uploads');
        //             PropertyPhoto::create([
        //                 'property_id' => $data->id,
        //                 'photo' => $photo ? $photo->hashName() : null,
        //             ]);
        //         }
        //     }
        // }

        if ($request->addfield) {
            $count = count($request->addfield);
            PropertyAdditionalFields::where('property_id', $data->id)->delete();
            // return $request->addfield;

            foreach ($request->addfield as $key => $field) {
                PropertyAdditionalFields::create([
                    'property_id' => $data->id,
                    'addfield' => $request->addfield[$key],
                    'addvalue' => $request->addvalue[$key]
                ]);
            }
            // for ($i = 1; $i <= $count; $i++) {
            //     if ($request->addfield && $request->addvalue) {
            //         PropertyAdditionalFields::create([
            //             'property_id' => $data->id,
            //             'addfield' => $request->addfield[$i],
            //             'addvalue' => $request->addvalue[$i]
            //         ]);
            //     }
            // }
        }
        return back()->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyList  $propertyList
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PropertyList::find($id);
        PropertyAdditionalFields::where('property_id', $data->id)->delete();
        PropertyNearLocationMap::where('property_id', $data->id)->delete();
        PropertyAminityMap::where('property_id', $data->id)->delete();
        PropertyPhoto::where('property_id', $data->id)->delete();
        $data->delete();
        return back()->with('success', 'Delete successfully');
        //
    }
}
