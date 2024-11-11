<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Sede;
use App\Models\School;
use App\Http\Controllers\Controller;
use function PHPUnit\Framework\isEmpty;

class AdministratorController extends Controller
{
    public function index()
    {
        $schools = School::all();
        $users = User::all();
        return view("administrator.index", compact('schools', 'users'));
    }

    public function asignar()
    {
        $schools = School::where('administrator_id', auth()->user()->id)->get();
        if (isEmpty($schools)) {
            return redirect()->route('administrator.index')->with('error', 'No tiene asignada ninguna Escuela');
        }
        $sedes = Sede::all();
        return view('administrator.asignar', compact('sedes'));
    }
}
