<?php

namespace App\Livewire;


use Livewire\Component;

class Company extends Component
{
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {


        return view('livewire.company');
    }
}