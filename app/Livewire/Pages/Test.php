<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Test extends Component
{
    public $message = '';
    
    public function render()
    {
        return view('livewire.pages.test');
    }

    public function onTestButtonClick() {
        $this->message = 'TEST';
        // alert("Message");

        // session()->flash('message', 'Post successfully updated.');
    }
}
