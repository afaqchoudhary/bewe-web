<?php

namespace App\Http\Middleware;

use Closure;

class SessionHasAdmin
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
        if (!$request->session()->exists('admin_id')) {
            /**
             * admin value cannot be found in session 
             */
            return redirect()->route('admin.login');
        }

        return $next($request);
    }
}
