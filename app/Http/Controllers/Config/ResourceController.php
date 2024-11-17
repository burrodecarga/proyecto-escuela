<?php

namespace App\Http\Controllers\Config;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\Sede;
use App\Models\Resource;
use App\Http\Requests\UpdateResourceRequest;
use App\Http\Requests\StoreResourceRequest;
use App\Http\Controllers\Controller;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resources = Resource::all();
        return view('config.resources.index', compact('resources'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // dd($request->all());
        if ($request->input('resourceable_type') == 'App\Models\Sede') {
            $resourceable_type = 'App\Models\Sede';
        }
        if ($request->input('resourceable_type') == 'App\Models\Room') {
            $resourceable_type = 'App\Models\Room';
        }

        //dd($resourceable_type);
        $resourceable_id = $request->input('resourceable_id');
        $ubication = $request->input('ubication');
        $title = __('create resource');
        $btn = __('resource add');
        $categories = RECURSOS;
        $resource = new Resource();
        return view('config.resources.create', compact('resourceable_id', 'resourceable_type', 'ubication', 'btn', 'title', 'categories', 'resource'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreResourceRequest $request)
    {
        //dd($request->all());
        $resource = Resource::create([
            'name' => mb_strtolower($request->input('name')),
            'category' => mb_strtolower($request->input('category')),
            'description' => mb_strtolower($request->input('description')),
            'ubication' => mb_strtolower($request->input('ubication')),
            'quantity' => mb_strtolower($request->input('quantity')),
            'resourceable_id' => $request->input('resourceable_id'),
            'resourceable_type' => $request->input('resourceable_type'),
        ]);
        $message = __('resource created successfully');
        return redirect()->route('resources.index')->with('success', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Resource $resource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resource $resource)
    {
        dd($resource);
        $categories = RECURSOS;
        $title = "room edit";
        $btn = "update resource";
        return view('config.resources.edit', compact('categories', 'resource', 'btn', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResourceRequest $request, Resource $resource)
    {
        $resource->update([
            'name' => mb_strtolower($request->input('name')),
            //'room_id' => mb_strtolower($request->input('room_id')),
            'category' => mb_strtolower($request->input('category')),
            'description' => mb_strtolower($request->input('description')),
            'quantity' => mb_strtolower($request->input('quantity')),
        ]);
        $message = __('resource updated successfully');
        return redirect()->route('resources.index')->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resource $resource)
    {
        $resource->delete();
        $message = __('resource deleted successfully');
        return redirect()->route('resources.index')->with('success', $message);
    }
}
