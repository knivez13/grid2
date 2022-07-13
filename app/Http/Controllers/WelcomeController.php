<?php

namespace App\Http\Controllers;

use App\Models\PropertyAminityMap;
use App\Models\PropertyList;
use App\Models\PropertyNearLocationMap;
use App\Models\PropertyPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

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
        return view('viewproperty', compact('data', 'photo', 'aminity', 'nearlocation'));
    }


    public function aboutus()
    {
        return view('aboutus');
    }

    public function contactus()
    {
        return view('contactus');
    }

    public function catalog()
    {
        $list = PropertyList::query()
            ->with('propertytype')
            ->with('listingcategory')
            ->with('listingtype')
            ->with('deliveryunit')
            ->with('priority')
            ->with('priorityunder')
            ->with('status')
            ->orderBy('id', 'DESC')
            ->paginate(12);
        return view('catalog', compact('list'));
    }
}
