<?php

namespace App\Livewire\Atoms;

use Livewire\Component;

class TextBox extends Component
{
    public $txtType;
    public $txtWireModel;

    public function render()
    {
        return view('livewire.atoms.text-box');
    }
}
