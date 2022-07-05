<?php

namespace App\Http\Controllers;

use App\Models\NearLocation;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class NearLocationController extends Controller
{
    public function index(Request $request)
    {
        $requestParams = $request->all();
        $search = Arr::get($requestParams, 'search', '');

        $list = NearLocation::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orderBy('id', 'DESC')
            ->paginate(10);
        return view('realstate.nearlocation.index', compact('list', 'search'));
    }

    public function create()
    {
        return view('realstate.nearlocation.create');
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|unique:near_locations,name',
            'status' => 'required',
        ]);

        $data = new NearLocation([
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
        $data = NearLocation::find($id);
        return view('realstate.nearlocation.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:near_locations,name,' . $id,
            'status' => 'required',
        ]);

        $data = NearLocation::find($id);
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
