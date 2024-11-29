<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // return $next($request);
        $guards = empty($guards) ? [null] : $guards;
        if(Auth::guard('akademik')->check()){
            return redirect('akademik/dashboard');
        }
        if(Auth::guard('dekan')->check()){
            return redirect('dekan/dashboard');
        }
        if(Auth::guard('ketua_program_studi')->check()){
            return redirect('kaprodi/dashboard');
        }
        if(Auth::guard('pembimbing_akademik')->check()){
            return redirect('pembimbing/dashboard');
        }
        if(Auth::guard('mahasiswa')->check()){
            return redirect('mahasiswa/dashboard');
        }
    }
}
