<?php

namespace App\Http\Controllers;

use App\Models\Aminity;
use App\Models\Priority;
use App\Models\ListingType;
use Illuminate\Support\Arr;
use App\Models\DeliveryUnit;
use App\Models\NearLocation;
use App\Models\PropertyList;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use App\Models\PriorityUnder;
use App\Models\PropertyPhoto;
use App\Models\PropertyStatus;
use App\Models\ListingCategory;
use App\Models\PropertyAminityMap;
use App\Models\PropertyNearLocationMap;
use App\Models\PropertyAdditionalFields;

class WelcomeController extends Controller
{
    public function welcome(Request $request)
    {

        $addedtoday = PropertyList::query()
            ->with('propertytype')
            ->with('listingcategory')
            ->with('listingtype')
            ->with('deliveryunit')
            ->with('priority')
            ->with('priorityunder')
            ->with('status')
            ->orderBy('id', 'DESC')
            ->take(3)
            ->get();

        $topoffer = PropertyList::query()
            ->with('propertytype')
            ->with('listingcategory')
            ->with('listingtype')
            ->with('deliveryunit')
            ->with('priority')
            ->with('priorityunder')
            ->with('status')
            ->orderBy('id', 'DESC')
            ->take(10)
            ->get();

        return view('welcome', compact('addedtoday', 'topoffer'));
    }

    public function viewproperty($title_slug)
    {
        $data = PropertyList::query()
            ->where('title_slug', $title_slug)
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
        $aminity = PropertyAminityMap::where('property_id', $data->id)->with('aminity')->get();
        $nearlocation = PropertyNearLocationMap::where('property_id', $data->id)->with('nearlocation')->get();
        $addfield = PropertyAdditionalFields::where('property_id', $data->id)->get();
        return view('viewproperty', compact('data', 'photo', 'aminity', 'nearlocation', 'addfield'));
    }


    public function aboutus()
    {
        return view('aboutus');
    }

    public function contactus()
    {
        return view('contactus');
    }

    public function catalog(Request $request)
    {
        $requestParams = $request->all();
        $location = Arr::get($requestParams, 'location', '');

        $idpt = PropertyType::where('status', '1')->pluck('id', 'id')->all();
        $spropertytype = Arr::get($requestParams, 'propertytype', $idpt);

        $iddu = DeliveryUnit::where('status', '1')->pluck('id', 'id')->all();
        $sdeliveryunit = Arr::get($requestParams, 'deliveryunit', $iddu);

        $deliveryunit = DeliveryUnit::where('status', '1')->get();
        $propertytype = PropertyType::where('status', '1')->get();
        $nearlocation = NearLocation::where('status', '1')->get();
        $aminity = Aminity::where('status', '1')->get();

        $list = PropertyList::query()
            ->with('propertytype')
            ->with('listingcategory')
            ->with('listingtype')
            ->with('deliveryunit')
            ->with('priority')
            ->with('priorityunder')
            ->with('status')
            ->whereIn('property_type_id', $spropertytype)
            ->whereIn('delivery_unit_id', $sdeliveryunit)
            ->orWhere([
                ['country', 'LIKE', "%{$location}%"],
                ['province', 'LIKE', "%{$location}%"],
                ['municipality', 'LIKE', "%{$location}%"],
                ['barangay', 'LIKE', "%{$location}%"],
                ['address', 'LIKE', "%{$location}%"],
            ])
            ->orderBy('id', 'DESC')
            ->paginate(12);

        return view('catalog', compact('list', 'deliveryunit', 'nearlocation', 'propertytype', 'aminity',));
    }
}
