<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sell extends Component
{

    public $buying_coin = 'BTC';
    public $selling_coin = 'ETC';
  
    public function mount(){
       
    }
    public function render()
    {
        return view('livewire.sell');
    }
}
