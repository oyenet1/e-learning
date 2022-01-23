<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Lesson extends Component
{
    public $start, $date, $end, $course, $user_id;
    public function render()
    {
        return view('livewire.lesson')->layout('layouts.dashboard');
    }
}
