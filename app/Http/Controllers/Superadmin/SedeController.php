<?php

namespace App\Http\Controllers\Superadmin;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Sede;
use App\Models\School;
use App\Http\Requests\UpdateSedeRequest;
use App\Http\Requests\StoreSedeRequest;
use App\Http\Controllers\Controller;

class SedeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sedes = Sede::all();
        return view('superadmin.sedes.index', compact('sedes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $schools = School::orderBy('name')->get();
        $title = __('create sede to school');
        $btn = _('create');
        $sede = new Sede();
        $sede->logo = Sede::FOTO;
        $sede->image = Sede::SCHOOL;
        return view('superadmin.sedes.create', compact('schools', 'title', 'sede', 'btn'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSedeRequest $request)
    {
        $school = School::find($request->input('school_id'));
        $newSede = Sede::create([
            'school' => mb_strtolower($school->name),
            'name' => mb_strtolower($request->input('name', )),
            'slug' => Str::slug(mb_strtolower($request->input('name', ))),
            'school_id' => mb_strtolower($request->input('school_id', )),
            'address' => mb_strtolower($request->input('address', )),
            'department' => mb_strtolower($request->input('department', )),
            'municipality' => mb_strtolower($request->input('municipality', )),
            'email' => mb_strtolower($request->input('email', )),
            'phone' => mb_strtolower($request->input('phone', )),
            'cell' => mb_strtolower($request->input('cell', )),
            'sector' => mb_strtolower($request->input('sector', )),
            'logo' => mb_strtolower($request->input('logo', )),
            'image' => mb_strtolower($request->input('image', )),
            'nit' => $school->nit,
            'dane' => $school->dane,
            'numero' => $school->sedes->count() + 1,
        ]);

        if ($request->file('logo')) {
            $file = $request->file('logo')->store('schools');
            $url = Storage::url($file);
            $newSede->logo = $url;
            $newSede->save();
        }

        if ($request->file('image')) {
            $file = $request->file('image')->store('schools');
            $url = Storage::url($file);
            $newSede->image = $url;
            $newSede->save();
        }

        $message = __('sede created successfully');
        return redirect()->route('sedes.index')->with('success', $message);

    }

    /**
     * Display the specified resource.
     */
    public function show(sede $sede)
    {
        return view('superadmin.sedes.show', compact('sede'));     //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sede $sede)
    {
        $schools = School::orderBy('name')->get();
        $title = __('edit sede');
        $btn = _('edit');
        return view('superadmin.sedes.edit', compact('schools', 'title', 'sede', 'btn'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatesedeRequest $request, sede $sede)
    {
        $school = School::find($request->input('school_id'));
        $sede->school = mb_strtolower($school->name);
        $sede->name = mb_strtolower($request->input('name', ));
        $sede->slug = Str::slug(mb_strtolower($request->input('name', )));
        $sede->school_id = mb_strtolower($request->input('school_id', ));
        $sede->address = mb_strtolower($request->input('address', ));
        $sede->department = mb_strtolower($request->input('department', ));
        $sede->municipality = mb_strtolower($request->input('municipality', ));
        $sede->email = mb_strtolower($request->input('email', ));
        $sede->phone = mb_strtolower($request->input('phone', ));
        $sede->cell = mb_strtolower($request->input('cell', ));
        $sede->sector = mb_strtolower($request->input('sector', ));
        // $sede->logo = mb_strtolower($request->input('logo', ));
        //$sede->image = mb_strtolower($request->input('image', ));
        $sede->nit = $school->nit;
        $sede->dane = $school->dane;

        if ($request->file('logo')) {
            if (strlen($sede->logo) > 0) {
                if (file_exists(public_path($sede->logo))) {
                    unlink(public_path($sede->logo));
                }
            }

            $file = $request->file('logo')->store('schools');
            $url = Storage::url($file);
            $sede->logo = $url;
            $sede->save();
        }


        if ($request->file('image')) {
            if (strlen($sede->image) > 0) {
                if (file_exists(public_path($sede->image))) {
                    unlink(public_path($sede->image));
                }
            }

            $file = $request->file('image')->store('schools');
            $url = Storage::url($file);
            $sede->image = $url;
            $sede->save();
        }



        $message = __('sede created successfully');
        return redirect()->route('sedes.index')->with('success', $message);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sede $sede)
    {
        $sede->delete();
        $message = __('sede deleted successfully');
        return redirect()->route('sedes.index')->with('success', $message);

    }
}
