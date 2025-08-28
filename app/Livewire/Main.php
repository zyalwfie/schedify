<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Schedify | Course Schedule')]
class Main extends Component
{
    public function render()
    {
        return view('livewire.main');
    }
}
