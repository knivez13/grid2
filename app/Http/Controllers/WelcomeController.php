<?php

namespace App\Http\Controllers;

use App\Models\PropertyList;
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
            ->first();
        $photo = PropertyPhoto::where('property_id', $data->id)->get();
        return view('viewproperty', compact('data', 'photo'));
    }
}
