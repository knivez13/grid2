<?php

namespace App\Http\Controllers;

use App\Models\Aminity;
use Auth;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class AminityController extends Controller
{
    public function index(Request $request)
    {
        $requestParams = $request->all();
        $search = Arr::get($requestParams, 'search', '');

        $list = Aminity::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orderBy('id', 'DESC')
            ->paginate(10);

        return view('realstate.aminity.index', compact('list', 'search'));
    }

    public function create()
    {
        return view('realstate.aminity.create');
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|unique:aminities,name',
            'status' => 'required',
        ]);

        $data = new Aminity([
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
        $data = Aminity::find($id);
        return view('realstate.aminity.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:aminities,name,' . $id,
            'status' => 'required',
        ]);

        $data = Aminity::find($id);
        $data->name = $request->get('name');
        $data->status = $request->get('status');
        $data->updated_by = Auth::user()->id;

        $data->save(); // Finally, save the record.
        return back()->with('success', 'Update successfully');
    }

    public function destroy($id)
    {
    }
}
