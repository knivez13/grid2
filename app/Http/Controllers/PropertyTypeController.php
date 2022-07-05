<?php

namespace App\Http\Controllers;

use App\Models\PropertyType;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PropertyTypeController extends Controller
{
    public function index(Request $request)
    {
        $requestParams = $request->all();
        $search = Arr::get($requestParams, 'search', '');

        $list = PropertyType::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orderBy('id', 'DESC')
            ->paginate(10);
        return view('realstate.propertytype.index', compact('list', 'search'));
    }

    public function create()
    {
        return view('realstate.propertytype.create');
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|unique:property_types,name',
            'status' => 'required',
        ]);

        $data = new PropertyType([
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
        $data = PropertyType::find($id);
        return view('realstate.propertytype.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:property_types,name,' . $id,
            'status' => 'required',
        ]);

        $data = PropertyType::find($id);
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
