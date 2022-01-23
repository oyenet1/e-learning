<?php

namespace App\Http\Livewire;

use App\Models\Lessons;
use Livewire\Component;

class Live extends Component
{
   public  Lessons $lesson;

    public function render()
    {
        // $lesson = $this->lesson->with(['lesson' => $this->lesson]);
        return view('livewire.live')->layout('layouts.dashboard');
    }
}
