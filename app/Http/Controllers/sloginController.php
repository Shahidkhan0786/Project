<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class sloginController extends Controller
{
    public function index(Request $request){
          

        return view('login');
    }

    public function check(Request $request){
          $obj =new user;
      
          $unam= $request->input('uname');
          $pass= $request->input('pass');
          $un1= $obj->where('email','=' , $unam)->get();
          foreach($un1 as $row){
          if($row['email']){
            $request->session()->put('login' , $row['uname']);
            if($row['password'] == $pass)
             return redirect('home');
            else
              return "please enter correct password";
            }
           else
           return redirect('/'); 
            }
        
    }

}
