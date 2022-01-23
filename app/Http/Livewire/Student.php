<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Student extends Component
{
    public $name, $email, $level, $department, $reg_no, $password; 

    public function render()
    {
        return view('livewire.student')->layout('layouts.dashboard');
    }
}
