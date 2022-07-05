<?php

namespace App\Http\Controllers;

use App\Models\ListingCategory;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ListingCategoryController extends Controller
{
    public function index(Request $request)
    {
        $requestParams = $request->all();
        $search = Arr::get($requestParams, 'search', '');

        $list = ListingCategory::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orderBy('id', 'DESC')
            ->paginate(10);
        return view('realstate.listingcategory.index', compact('list', 'search'));
    }

    public function create()
    {
        return view('realstate.listingcategory.create');
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|unique:listing_categories,name',
            'status' => 'required',
        ]);

        $data = new ListingCategory([
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
        $data = ListingCategory::find($id);
        return view('realstate.listingcategory.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:listing_categories,name,' . $id,
            'status' => 'required',
        ]);

        $data = ListingCategory::find($id);
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
