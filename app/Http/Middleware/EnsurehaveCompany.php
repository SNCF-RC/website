<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsurehaveCompany
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
        }else if ($company->accountbank()->first()){
            return redirect(route('game.index'));
        }return $next($request);
    }
}
