<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{


    public $name = '';

    public function increment()
    {
        $this->count++;
    }


    public function decrement()
    {
        $this->count--;
    }
    public function render()
    {
        return view('livewire.counter', [
            'name' => 'mike'
        ]);
    }
}
