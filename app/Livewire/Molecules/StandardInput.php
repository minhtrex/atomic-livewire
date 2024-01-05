<?php

namespace App\Livewire\Molecules;

use Livewire\Component;

class StandardInput extends Component
{
    public $labelContent;
    public $txtType;
    public $txtWireModel;
    public $errId;

    public function render()
    {
        return view('livewire.molecules.standard-input');
    }
}
