<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
  
    public function index(){


        return view('blogs');
    }



    public function wait(Request $request)
    {
       return "Hello!";
    }
}