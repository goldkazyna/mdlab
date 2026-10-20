<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VisitLogAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->session()->get('visit_log_auth')) {
            return redirect()->route('visits.login');
        }

        $response = $next($request);
        $response->headers->set('X-Robots-Tag', 'noindex, nofollow');

        return $response;
    }
}
