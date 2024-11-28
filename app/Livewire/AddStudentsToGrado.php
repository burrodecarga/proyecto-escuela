<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Periodo;
use App\Models\Grado;

class AddStudentsToGrado extends Component
{
    public $users, $grado;
    public $seleccionados;
    public $grado_sede;
    public $grado_student;
    public function mount($grado_sede, $grado)
    {
        $this->grado = $grado;
        $this->users = User::all();
        $this->grado_sede = $grado_sede;


    }
    public function render()
    {

        $this->seleccionados = DB::table('grado_student')->where('pivot_grado_sede_id', $this->grado_sede->id)->get();
        return view('livewire.add-students-to-grado');
    }

    public function addStudent(User $user, $ed)
    {
        //dd($user->name, $ed);
        $existe = DB::table('grado_student')->where('user_id', $user->id)->where('periodo_id', $this->grado_sede->periodo_id)->exists();
        if ($existe) {
            $message = __('the user is already registered in this period');
            flash()->options([
                'timeout' => 1500,
            ])->warning($message);
        } else {
            $periodo = Periodo::find($this->grado_sede->periodo_id);
            DB::table('grado_student')
                ->insert(
                    [
                        'pivot_grado_sede_id' => $this->grado_sede->id,
                        'grado_id' => $this->grado_sede->grado_id,
                        'periodo_id' => $this->grado_sede->periodo_id,
                        'grado_name' => $this->grado_sede->grado_name,
                        'periodo_name' => $periodo->lapso,
                        'sede_id' => $this->grado_sede->sede_id,
                        'numero' => $this->grado_sede->numero,
                        'letra' => $this->grado_sede->letra,
                        'user_id' => $user->id,
                        'name' => $user->name,
                        'last_name' => $user->last_name,
                        'cedula' => $user->cedula,
                    ]
                );

            return redirect(request()->header('Referer'));
        }
    }

    public function delStudent(User $user, $ed)
    {
        //dd($user);
        DB::table('grado_student')
            ->where('user_id', $user->id)
            ->where('periodo_id', $this->grado_sede->periodo_id)
            ->where('sede_id', $this->grado_sede->sede_id)
            ->where('grado_id', $this->grado_sede->grado_id)
            ->where('numero', $this->grado_sede->numero)->delete();
        $message = __('deleted');
        flash()->options([
            'timeout' => 1500,
        ])->success($message);

        return redirect(request()->header('Referer'));

    }
}
