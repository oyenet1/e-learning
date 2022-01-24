<?php

namespace App\Http\Livewire;

use App\Models\Lessons;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;

class Lesson extends Component
{
    public $start, $date, $end, $course, $user_id;

    
    use WithPagination;

    public $perPage = 10;

    // types of book

    public $show = false;
    public $update = false;
    public $modal = false;

    Public $search;

    // public $returned = true;

    public $binded = [];
    public $borrowed = [];
    public $data = [];

    protected $listeners = [
        'delete' => 'delete',
        'show' => 'alert'
    ];

    protected $rules = [
        'course' => 'required',
        'date' => 'required',
        'start' => 'required',
        'end' => 'required',
        'user_id' => 'nullable'
    ];

    // refreshinputs after saved
    function refreshInputs()
    {
        $this->course = '';
        $this->start = '';
        $this->end = '';
        $this->date = '';
    }

    // show modal 
    public function show()
    {
        $this->modal = true;
    }

    public function save()
    {
        $data = $this->validate();
        $saved = auth()->user()->lessons()->create($data);
        // array_merge($data, ['password' => Hash::make('password')])
        $this->modal = false;

        if ($saved) {
            $this->dispatchBrowserEvent('swal:success', [
                'icon' => 'success',
                'text' => 'Record saved Successfully',
                'title' => 'Confirmed',
                'timer' => 4000,
            ]);

            $this->refreshInputs();
        }
    }
    public function render()
    {
        $lessons = Lessons::all();
        return view('livewire.lesson', compact(['lessons']))->layout('layouts.dashboard');
    }
}
