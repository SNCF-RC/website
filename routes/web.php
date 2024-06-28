<?php

use App\Http\Middleware\EnsurehaveCompany;
use App\Http\Middleware\EnsurehaveCompanyAndBanK;
use App\Http\Middleware\EnsurehaveCompanyAndBanKAndAssurance;
use App\Http\Middleware\EnsureNewUser;
use App\Livewire\game\ChoiceAssurance;
use App\Livewire\Game\ChoiceBank;
use App\Livewire\Game\CreateCompany;
use App\Livewire\game\Index;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
Route::group(['middleware' => ['auth:web', 'verified']], function () {
    Route::get('/game', Index::class)->name('game.index')->middleware(EnsurehaveCompanyAndBanKAndAssurance::class);
    Route::get('/game/company/create', CreateCompany::class)->name('game.company.create')->middleware(EnsureNewUser::class);

    Route::get('/game/company/{id}/choice/bank', ChoiceBank::class)->name('game.company.choice.bank')->middleware(EnsurehaveCompany::class);
    Route::get('/game/company/{id}/choice/assurance', ChoiceAssurance::class)->name('game.company.choice.assurance')->middleware(EnsurehaveCompanyAndBanK::class);
});

