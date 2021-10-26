<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoggedAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(session('admin_id','none') != 'none'){

            return redirect('admin/dashboard');

        }

        return $next($request);
    }
}
