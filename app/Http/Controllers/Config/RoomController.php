<?php

namespace App\Http\Controllers\Config;

use App\Models\Sede;
use App\Models\Room;
use App\Http\Requests\UpdateRoomRequest;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::with('sede')->get();
        return view('config.rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "room create";
        $btn = "create room";
        $room = new Room();
        $sedes = Sede::all();
        return view('config.rooms.create', compact('room', 'btn', 'title', 'sedes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomRequest $request)
    {
        $w = $request->input('width');
        $l = $request->input('long');
        $c = $w * $l * Room::CAPACITY;


        $room = Room::create([
            'sede_id' => mb_strtolower($request->input('sede_id')),
            'name' => mb_strtolower($request->input('name')),
            'width' => mb_strtolower($request->input('width')),
            'long' => mb_strtolower($request->input('long')),
            'high' => mb_strtolower($request->input('high')),
            'capacity' => round($c)
        ]);

        $message = __('room created successfully');
        return redirect()->route('rooms.index')->with('success', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //dd($room->id);
        if ($room->id <= -20) {
            abort(403);
        }
        $title = "room edit";
        $btn = "update room";
        $sedes = Sede::all();
        return view('config.rooms.edit', compact('room', 'btn', 'title', 'sedes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        $w = $request->input('width');
        $l = $request->input('long');
        $c = $w * $l * Room::CAPACITY;


        $room->update([
            'sede_id' => mb_strtolower($request->input('sede_id')),
            'name' => mb_strtolower($request->input('name')),
            'width' => mb_strtolower($request->input('width')),
            'long' => mb_strtolower($request->input('long')),
            'high' => mb_strtolower($request->input('high')),
            'capacity' => round($c)
        ]);
        $room->save();

        $message = __('room updated successfully');
        return redirect()->route('rooms.index')->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        $room->delete();
        $message = __('room deleted successfully');
        return redirect()->route('rooms.index')->with('success', $message);
    }

    // public function create_resource($id)
    // {
    //     $resource = new Resource();
    //     $categories = RECURSOS;
    //     $room = Room::find($id);
    //     $title = "add resource to room";
    //     $btn = "add resource";
    //     return view('config.rooms.resource', compact('categories', 'resource', 'room', 'btn', 'title'));
    // }
}
