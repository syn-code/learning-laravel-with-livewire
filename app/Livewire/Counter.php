<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    //all properties in livewire are made available to blade template
    public $count = 0;
    
    
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
        return <<<'HTML'
            <div class="counter">
                <button wire:click="decrement">-</button>
                <span>{{ $count }}</span>
                <button wire:click="increment">+</button>
            </div>
        HTML;
    }
}
