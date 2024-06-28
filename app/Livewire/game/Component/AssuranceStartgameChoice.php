<?php

namespace App\Livewire\game\Component;

use App\Models\Assurance;
use App\Models\AssuranceOperation;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AssuranceStartgameChoice extends Component
{
    public $assurance;

    public function  save()
    {


        $company = Auth::user()->company()->doesntHave('accountassurance')->first();
        $accountassurance = $company->accountassurance()->create([
            'assurance_id' => $this->assurance->id,
        ]);
         AssuranceOperation::create([
            'account_assurance_id' => $accountassurance->id,
        ],
        );
         return redirect()->route('game.index');
    }

    public function mount($assurance ){
        $this->assurance = $assurance;
    }

    public function render()
    {
                session(['inscription' => false]);
        return view('livewire.game.component.assurance-startgame-choice');
    }
}
