<?php

namespace App\Http\Controllers\Config;

use App\Models\Grado;
use App\Http\Requests\UpdateGradoRequest;
use App\Http\Requests\StoreGradoRequest;
use App\Http\Controllers\Controller;

class GradoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grados = Grado::all();
        return view('superadmin.grados.index', compact('grados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $grado = new Grado();
        $title = "grado create";
        $btn = "create";
        return view('superadmin.grados.create', compact('grado', 'btn', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoregradoRequest $request)
    {
        $grado = Grado::create([
            'name' => mb_strtolower($request->input('name')),
            'level' => mb_strtolower($request->input('level')),
            'ordinal' => mb_strtolower($request->input('ordinal')),
        ]);
        $message = __('grado created successfully');
        return redirect()->route('grados.index')->with('success', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Grado $grado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grado $grado)
    {
        if ($grado->id <= 20) {
            abort(403);
            $message = __('unahutorized acction');
            return redirect()->route('grados.index')->with('success', $message);
        }
        $title = "grado edit";
        $btn = "update";
        return view('superadmin.grados.edit', compact('grado', 'btn', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdategradoRequest $request, Grado $grado)
    {
        $grado->update([
            'name' => mb_strtolower($request->input('name')),
            'nit' => mb_strtolower($request->input('nit')),
            'dane' => mb_strtolower($request->input('dane')),
        ]);
        $message = __('grado edited successfully');
        return redirect()->route('grados.index')->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grado $grado)
    {
        if ($grado->id <= 20) {
            abort(403);
        }
        $grado->delete();
        $message = __('grado deleted successfully');
        return redirect()->route('grados.index')->with('success', $message);
    }
}
