<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class IngresoLogin
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
        
        if(auth()->user()->email == "xrl869@hotmail.com"){
            return view('home');
        }

        else if(auth()->user()->email == "carlos@gmail.com"){
            return 'ksjdnsdf';
        }
        else if(auth()->user()->email == "roberto24@gmail.com"){
	        return $this->redirect()->toRoute('/cliente');
        }else{
	        return redirect('error xd');
        }   


        //return $next($request);
       // return redirect('/');
    }
}
