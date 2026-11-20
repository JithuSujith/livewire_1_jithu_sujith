<?php

namespace App\Livewire;

use Livewire\Component;

class CounterClass extends Component
{   
    public $value=0;
    public $number;

    public function increment(){
        $this->value++;
    }

    public function decrement(){
        $this->value--;
    }

    public function increment_by_number($n){
        $this->value+=$n;
    }

     public function decrement_by_number($n){
        $this->value-=$n;
    }
 
    public function render()
    {
        return view('livewire.counter-class');
    }
}
