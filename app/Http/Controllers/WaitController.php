<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Answer;
use Auth;
use App\Models\User;
 
class WaitController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function wait(Request $request)
    {
       
     $user = User::where('id',1)->first();

     return $user->password;
       
      
     
        


 
    }
}