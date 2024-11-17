<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Periodo;
use App\Http\Requests\UpdatePeriodoRequest;
use App\Http\Requests\StorePeriodoRequest;

class PeriodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periodos = Periodo::orderBy('year')->get();
        return view('config.periodos.index', compact('periodos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePeriodoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Periodo $periodo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periodo $periodo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePeriodoRequest $request, Periodo $periodo)
    {
        DB::table('periodos')
            ->update(['current' => 0]);//
        DB::table('periodos')
            ->where('id', $periodo->id)
            ->update(['current' => 1]);//

        return redirect()->route('periodos.index')->with('success', 'Operación realizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periodo $periodo)
    {
        //
    }
}
