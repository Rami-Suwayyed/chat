<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 0;
    public $message ;
    public $search ="";
    public $isActive = true;
    public $parent = ["child" => ""];

    public function increment() {
    $this->count++;
    }
    public function decrement() {
        $this->count--;
    }

    public function toggle() {
        $this->isActive = !$this->isActive;
    }
    public function resetIsActive() {
        $this->reset('isActive');
    }
    public function getReversedProperty(){
        return strrev($this->message);
    }
    public function mount(){
        $this->fill(['message' => 'Hello World']);
    }

    public function save(){
        $this->count *2;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
