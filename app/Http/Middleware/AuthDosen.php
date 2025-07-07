<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthDosen
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check() || Auth::user()->role !== 'dosen') {
            return redirect('/logindosen');
        }

        return $next($request);
    }
}