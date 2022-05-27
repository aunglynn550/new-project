<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Answer;
use Auth;
 
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
       
     
       
        // $result[1]=$request->answer1;
        // $result[2]=$request->answer2;
        // $result[3]=$request->answer3;

        // echo $result[1];

        // foreach($result as $r)
        // {
        //     $answer= new Answer();
        //     $answer->description=$r;
        

        // }
      
        $user = Auth::user();
        print_r($user);
        



    //    return var_dump($_POST['title']); 
    }
}