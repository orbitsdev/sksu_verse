<?php

namespace App\Livewire;

use Livewire\Component;

class HellowWorld extends Component
{

    public $counter = 0;
    public function render()
    {
        return view('livewire.hellow-world');
    }

    public function increments(){
        $this->counter++;
    }
    public function decrement(){
        $this->counter--;
    }
}
