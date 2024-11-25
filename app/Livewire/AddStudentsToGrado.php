<?php

namespace App\Livewire;

use App\Models\Grado;
use Livewire\Component;

class AddStudentsToGrado extends Component
{
    public function mount(Grado $grado)
    {
    }
    public function render()
    {
        return view('livewire.add-students-to-grado');
    }
}
