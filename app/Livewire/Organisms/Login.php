<?php

namespace App\Livewire\Organisms;

use Livewire\Component;
use Hash;
use App\User;

class Login extends Component
{
    public $users, $email, $password, $name;
    public $registerForm = false;

    // protected $rules = [
    //     'name' => 'required|min:4',
    //     'email' => 'required|email',
    //     'password' => 'required',
    // ];

    public function render()
    {
        return view('livewire.organisms.login');
    }

    public function login()
    {
        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
            session()->flash('message', "You are Login successful.");
        }else{
            session()->flash('error', 'email and password are wrong.');
        }
    }

    public function register()
    {
        $this->registerForm = !$this->registerForm;
    }

    public function registerStore()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // $this->password = Hash::make($this->password); 

        // User::create(['name' => $this->name, 'email' => $this->email,'password' => $this->password]);

        session()->flash('message', 'Your register successfully Go to the login page.');

        $this->resetInputFields();
    }

    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }
}
