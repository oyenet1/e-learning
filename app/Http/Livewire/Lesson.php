<?php

namespace App\Http\Livewire;

use App\Models\Lessons;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Lesson extends Component
{
    public $start, $date, $end, $course, $user_id;

    
    use WithPagination;

    public $perPage = 10;

    // types of book

    public $title, $author, $quantity, $cover, $isBind, $all,  $cid;
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
        'title' => 'required',
        'author' => 'required',
        'quantity' => 'required|int|min:1|max:2000',
        'cover' => 'nullable|url',
        'isBind' => 'required|boolean'
    ];

    // refreshinputs after saved
    function refreshInputs()
    {
        $this->title = '';
        $this->author = '';
        $this->quantity = '';
        $this->cover = '';
        $this->isBind = '';
    }

    // show modal 
    public function show()
    {
        $this->modal = true;
    }

    public function save()
    {
        $data = $this->validate();
        $saved = auth()->user()->create(array_merge($data, ['password' => Hash::make('password')]));

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
        return view('livewire.lesson')->layout('layouts.dashboard');
    }
}
