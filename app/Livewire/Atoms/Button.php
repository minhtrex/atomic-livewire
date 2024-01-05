<?php

namespace App\Livewire\Atoms;

use Livewire\Component;

class Button extends Component
{
    public $btnType;
    public $btnName;

    public function render()
    {
        return view('livewire.atoms.button');
    }
}
