<?php

namespace App;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->input('token') !== 'token') {
            return redirect('home');
        }
    
        return $next($request);
    }
}
Route::get('/profile', function () {
    // ...
})->middleware(Authenticate::class);