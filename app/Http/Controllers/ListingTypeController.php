<?php

namespace App\Http\Controllers;

use App\Models\ListingType;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ListingTypeController extends Controller
{
    public function index(Request $request)
    {
        $requestParams = $request->all();
        $search = Arr::get($requestParams, 'search', '');

        $list = ListingType::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orderBy('id', 'DESC')
            ->paginate(10);
        return view('realstate.listingtype.index', compact('list', 'search'));
    }

    public function create()
    {
        return view('realstate.listingtype.create');
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|unique:listing_types,name',
            'status' => 'required',
        ]);

        $data = new ListingType([
            'name' => $request->get('name'),
            'status' => $request->get('status'),
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,

        ]);

        $data->save(); // Finally, save the record.

        return back()->with('success', 'Created successfully');
        return $request;
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $data = ListingType::find($id);
        return view('realstate.listingtype.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:listing_types,name,' . $id,
            'status' => 'required',
        ]);

        $data = ListingType::find($id);
        $data->name = $request->get('name');
        $data->status = $request->get('status');
        $data->updated_by = Auth::user()->id;

        $data->save(); // Finally, save the record.
        return back()->with('success', 'Update successfully');
    }

    public function destroy($id)
    {
        //
    }
}
