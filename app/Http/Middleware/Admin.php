<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user()->permissao == 'supervisor')
        {
            return redirect('supervisor');
        }
        if ($request->user()->permissao == 'cliente')
        {
            return redirect('cliente');
        }

        return $next($request);
    }
}