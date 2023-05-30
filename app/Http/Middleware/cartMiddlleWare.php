<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class cartMiddlleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!session()->has('loggedUser')&& $request->path()!='/cart'&& $request->path()!='/register' && $request->path()!='/dashboard' && $request->path()!='/login'&& $request->path()!='/product/{id'){
            return redirect('/login')->with('msg','You Need to login to access the next page');
        }
        if(session()->has('loggedUser')&& $request->path()=='/cart'&& $request->path()=='/register' && $request->path()=='/login'&& $request->path()=='/product/{id'){
            return back();
        }
        return $next($request);
    }
}
