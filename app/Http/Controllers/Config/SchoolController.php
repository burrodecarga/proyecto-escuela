<?php

namespace App\Http\Controllers\Config;

use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\School;
use App\Http\Requests\UpdateSchoolRequest;
use App\Http\Requests\StoreSchoolRequest;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schools = School::all();
        return view('config.schools.index', compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $school = new School();
        $title = "school create";
        $btn = "create";
        return view('config.schools.create', compact('school', 'btn', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchoolRequest $request)
    {

        $school = School::create([
            'name' => mb_strtolower($request->input('name')),
            'slug' => Str::slug($request->input('name')),
            'nit' => mb_strtolower($request->input('nit')),
            'dane' => mb_strtolower($request->input('dane')),
        ]);

        if ($request->file('url')) {

            $file = $request->file('url')->store('schools');
            $url = Storage::url($file);
            //$school->images()->create(['url' => $url,]);
            $school->logo = $url;
            $school->image = $url;
            $school->save();
        }
        $message = __('school created successfully');
        return redirect()->route('schools.index')->with('success', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(School $school)
    {
        $sedes = $school->sedes;
        return view('config.schools.show', compact('school', 'sedes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(School $school)
    {
        $title = "school edit";
        $btn = "edit";
        return view('config.schools.edit', compact('school', 'btn', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchoolRequest $request, School $school)
    {
        $school->update([
            'name' => mb_strtolower($request->input('name')),
            'slug' => Str::slug($request->input('name')),
            'nit' => mb_strtolower($request->input('nit')),
            'dane' => mb_strtolower($request->input('dane')),
        ]);

        if ($request->file('url')) {
            //dd($school->image);
            if ($school->logo <> '/storage/schools/foto.png') {
                if (file_exists(public_path($school->image))) {
                    unlink(public_path($school->image));
                    //dd('borrado');
                }
            }

            $file = $request->file('url')->store('schools');
            $url = Storage::url($file);
            //$school->images()->create(['url' => $url,]);
            $school->logo = $url;
            $school->image = $url;
            $school->save();
        }
        $message = __('correct modified school');
        return redirect()->route('schools.index')->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(School $school)
    {
        if ($school->logo <> '/storage/schools/foto.png') {
            if (file_exists(public_path($school->image))) {
                unlink(public_path($school->image));
                //dd('borrado');
            }
        }
        $school->delete();
        $message = __('correct deleted school');
        return redirect()->route('schools.index')->with('success', $message);
    }

    public function show_sede($id)
    {
        $school = School::find($id);
        $sedes = $school->sedes;

        return view('config.schools.sede', compact('sedes', 'school'));
    }


    public function administrator(School $school)
    {
        //$users = Role::user('administrator')->get();
        $users = User::where('rol', 'administrator')->get();
        //dd($users);
        return view('config.schools.administrator', compact('school', 'users'));
    }

    public function assign(Request $request)
    {
        $school = School::find($request->school_id);
        $user = User::find($request->user_id);
        $school->update([

            'administrator_id' => $user->id,
            'administrator_name' => $user->name
        ]);

        $school->save();
        $message = 'Usuario asignado como administrador de escuela';
        return redirect()->route('schools.index')->with('success', $message);
    }
}
