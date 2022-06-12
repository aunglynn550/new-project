<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogsController extends Controller
{
  
    public function index(){

        if (Auth::check())
        {
            return "hello you are login user";
        }
        return "You are not login yet!";

       // $user= Auth::user();
      
       // return var_dump($user);
        //return view('blogs');
    }



    public function wait(Request $request)
    {
       return "Hello!";
    }
}