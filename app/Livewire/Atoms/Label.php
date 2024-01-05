<?php

namespace App\Livewire\Atoms;

use Livewire\Component;

class Label extends Component
{
    public $labelContent = '';

    public function render()
    {
        return view('livewire.atoms.label');
    }
}
