<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->email == "xrl869@hotmail.com"){
            return view('home');
        }       
         else if(auth()->user()->email == "roberto24@gmail.com"){
	       return view('cliente');
        }else{
	        return 'error';
        }   

    }

    public function contador()
    {
        return view('contador');
    }
    public function encargado()
    {
        return view('encargado');
    }
    public function cliente()
    {
        return view('cliente');
    }
}
