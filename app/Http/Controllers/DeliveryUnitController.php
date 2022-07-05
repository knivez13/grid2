<?php

namespace App\Http\Controllers;

use App\Models\DeliveryUnit;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class DeliveryUnitController extends Controller
{
    public function index(Request $request)
    {
        $requestParams = $request->all();
        $search = Arr::get($requestParams, 'search', '');

        $list = DeliveryUnit::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orderBy('id', 'DESC')
            ->paginate(10);
        return view('realstate.deliveryunit.index', compact('list', 'search'));
    }

    public function create()
    {
        return view('realstate.deliveryunit.create');
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|unique:delivery_units,name',
            'status' => 'required',
        ]);

        $data = new DeliveryUnit([
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
        $data = DeliveryUnit::find($id);
        return view('realstate.deliveryunit.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:delivery_units,name,' . $id,
            'status' => 'required',
        ]);

        $data = DeliveryUnit::find($id);
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
