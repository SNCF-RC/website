<?php

namespace App\Livewire\Game;

use App\Models\Bank;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChoiceBank extends Component
{
    public $banks;

    public function mount(): void
    {
        $this->banks = Bank::all();
    }



    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.game.choice-bank');
    }
}
