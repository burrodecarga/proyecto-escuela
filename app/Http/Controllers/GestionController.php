<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Sede;
use App\Models\Periodo;
use App\Models\Lectivo;
use App\Models\Grado;

class GestionController extends Controller
{
    public function index()
    {
        $sedes = Sede::all();
        $periodo = Periodo::where('current', 1)->first();
        if ($periodo === null) {
            $message = __('no school period selected');
            return redirect()->back()->with('error', $message);
        }
        return view('config.gestion.index', compact('sedes', 'periodo'));
    }

    public function secciones(Sede $sede)
    {
        $grados = Grado::all();
        $periodo = Periodo::where('current', 1)->first();
        if ($periodo === null) {
            $message = __('no school period selected');
            return redirect()->back()->with('error', $message);
        }
        return view('config.gestion.secciones', compact('sede', 'grados', 'periodo'));
    }

    public function create_lectivo(Sede $sede)
    {
        $grados = $sede->grados;
        return view('config.gestion.create_lectivo', compact('sede'));

    }

    public function lectivo_by_sede(Sede $sede)
    {
        $periodo = Periodo::where('current', 1)->first();
        $lectivos = Lectivo::where('sede_id', $sede->id)->where('periodo_id', $periodo->id)->get();

        $periodo = Periodo::where('current', 1)->first();
        if ($lectivos->isEmpty()) {
            $message = __('no school period');
            return redirect()->back()->with('error', $message);
        }
        return view('config.gestion.lectivo_by_sede', compact('sede', 'lectivos', 'periodo'));

    }

    public function assign_teacher_to_lectivo(Lectivo $lectivo)
    {
        $users = User::where('rol', 'teacher')->get();
        return view('config.gestion.asignar_teacher_to_lectivo', compact('lectivo', 'users'));
    }

    public function assign_teacher(Request $request)
    {
        $user = User::find($request->input('user_id'));
        $lectivo = Lectivo::find($request->input('lectivo_id'));
        $lectivo->teacher_id = $user->id;
        $lectivo->teacher_name = $user->fullName;
        $lectivo->update();
        $message = __('correctly assigned teacher');
        return redirect()->route('gestion.lectivo_by_sede', $lectivo->sede_id)->with('success', $message);

    }

    public function grados_by_sede(Sede $sede)
    {
        $periodo = Periodo::where('current', 1)->first();
        $grados = $sede->grados;
        return view('config.gestion.grados_by_sede', compact('sede', 'grados', 'periodo'));
    }

    public function grados_and_sections_by_sede(Sede $sede)
    {
        $grados = DB::table('grado_sede')->where('sede_id', $sede->id)->get();


    }

    public function assign_students_to_grado(Lectivo $lectivo)
    {
        $grado = [];
        return view('config.gestion.assign_students_to_grado', compact('grado'));
    }

}
