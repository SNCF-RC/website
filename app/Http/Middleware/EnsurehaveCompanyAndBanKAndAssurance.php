<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsurehaveCompanyAndBanKAndAssurance
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $company = Auth::user()->company()->first();
        if (!$company){
            return redirect(route('game.company.create'));
        }else if (!$company->accountbank()->first()){
            return redirect(route('game.company.choice.bank',['id' => $company->id]));
        }else if (!$company->accountassurance()->first()){
            return redirect(route('game.company.choice.assurance',['id' => $company->id]));
        }
        return $next($request);
    }
}
