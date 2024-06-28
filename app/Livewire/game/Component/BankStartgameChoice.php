<?php

namespace App\Livewire\Game\Component;

use App\Models\BankOperations;
use App\TypeBankOperation;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Symfony\Component\HttpFoundation\Session\Session;

class BankStartgameChoice extends Component
{
    public $bank;

    public function  save()
    {


        $company = Auth::user()->company()->doesntHave('accountbank')->first();
        $company->accountbank()->create([
            'bank_id' => $this->bank->id,
        ]);
        $bankoperation = BankOperations::create([
            'type' => TypeBankOperation::virement,
            'amount' => 3000000,
            'description' => "premier virement",
            'account_bank_id' => $company->accountbank()->first()->id,
        ],
        );

        $this->redirectRoute('game.company.choice.assurance',['id' => $company->id]);

    }

    public function mount($bank ){
        $this->bank = $bank;
    }

    public function render()
    {
        session(['inscription' => false]);
        return view('livewire.game.component.bank-startgame-choice');
    }
}
