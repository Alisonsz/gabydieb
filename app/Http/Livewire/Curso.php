<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CursoModel;

class Curso extends Component
{
    public function render()
    {
            return view('livewire.curso', [
                'cursos' => CursoModel::all()
            ]);
    }
}
