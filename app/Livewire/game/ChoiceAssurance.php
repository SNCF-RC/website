<?php

namespace App\Livewire\game;

use App\Models\Assurance;
use Livewire\Component;

class ChoiceAssurance extends Component
{
    public $assurances;

    public function mount(): void
    {
        $this->assurances = Assurance::all();
    }



    public function render()
    {
        return view('livewire.game.choice-assurance');
    }
}
