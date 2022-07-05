<?php

namespace App\Http\Controllers;

use App\Models\PriorityUnder;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PriorityUnderController extends Controller
{
    public function index(Request $request)
    {
        $requestParams = $request->all();
        $search = Arr::get($requestParams, 'search', '');

        $list = PriorityUnder::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orderBy('id', 'DESC')
            ->paginate(10);
        return view('realstate.priorityunder.index', compact('list', 'search'));
    }

    public function create()
    {
        return view('realstate.priorityunder.create');
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|unique:priority_unders,name',
            'status' => 'required',
        ]);

        $data = new PriorityUnder([
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
        $data = PriorityUnder::find($id);
        return view('realstate.priorityunder.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:priority_unders,name,' . $id,
            'status' => 'required',
        ]);

        $data = PriorityUnder::find($id);
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
