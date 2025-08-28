<?php

namespace App\Livewire;

use App\Models\Day;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Computed;

#[Title('Schedify | Course Schedule')]
class Main extends Component
{
    #[Computed()]
    public function days()
    {
        return Day::all();
    }

    public function render()
    {
        return view('livewire.main');
    }
}
