<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 
  
  
  
        public function __construct()
        {
          
        }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function user()
    {
       // return view('home');
       $user= Auth::user();
       return $user->name;
    }

    public function approval()
{
    return view('approval');
}

}
