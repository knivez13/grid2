<?php

namespace App\Http\Controllers;

use App\Models\PropertyList;
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
}
