<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckBasicRequirements
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->input('age') < 18) {
            return redirect()->route('entry');
        }
        if ($request->input('nationality') !== 'Nepali') {
            return redirect()->route('entry');
        }
        return $next($request);
    }
}
