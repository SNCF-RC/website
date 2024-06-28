<?php

namespace App\Livewire\Game;

use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateCompany extends Component
{
    #[Validate('required|unique:companies,name')]
    public $companyname;

    public function save(): void
    {
        $this->validate();

        $company = Auth::user()->company()->create(
            ['name' => $this->companyname]
        );

        session()->flash('status', 'Company successfully created.');

        $this->redirectRoute('game.company.choice.bank',['id' => $company->id]);
    }
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        session(['inscription' => false]);
        session(['company' => false]);
        return view('livewire.game.create-company');
    }
}
