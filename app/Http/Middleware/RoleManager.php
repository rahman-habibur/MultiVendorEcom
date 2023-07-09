<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        /*
        create middleware
        register in kernel (middlewareAliases)
        authenticated session controller (1)
        middleware create
        */
        
        if ($request->user()->role !== $role) {
            return redirect('user.index');
        } 
        
        return $next($request);
    }
}
