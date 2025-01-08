<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class VerificationMiddleware {
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {
        if (Auth::user()->active == 0) {
            return redirect()->route('email.verification.with.code');
        } else {
            return $next($request);
        }
    }
}
