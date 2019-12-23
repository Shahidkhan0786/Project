<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class Login1Controller extends Controller
{
    
    public function store(Request $request)
    {

        $obj = new user;
        $obj1= $obj->all();
        $email=$request->input('email');
        $pas=$request->input('pass');
        foreach($obj1 as $row){
        $em= $row['email'];
        $ty =$row['type'];
        $pass =$row['password'];
        if($email==$em && $ty=="admin"){
        if($pas==$pass)
        return redirect('index');
         else
         return "please enter correct password";
        }
        }
        // $ty= $obj->input('type');
        return redirect('home'); 
            
        
        
        
       
       
        

      
    }


}
