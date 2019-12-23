<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class user1Controller extends Controller
{
    public function index()
    {
        $data = new user;
        $d =$data->all();
        return view('user' , compact('d'));
      
    }

    public function store(Request $request)
    {
        $data = new user;
         $data->uname = $request->input('nam');
        $data->email =  $request->input('email');
         $data->password =  $request->input('pass');
       $data->type=  $request->input('type');
       $data->save();
          
          return redirect('index');
      

    }

    public function edit($id)
    {
        $rec =user::where('id', '=', $id)->get();
        // return $rec;
       return view('useredit' , compact('rec'));

    }
 
    public function update(Request $request, $id)
    { 
        $d =new user;
        $data =$d->find($id);
        // return $d;
        // $data =user::where('id', '=', $id)->get();
        $data->uname = $request->input('nam');
        $data->email =  $request->input('email');
        $data->password =  $request->input('pass');
       $data->type=  $request->input('type');
        $data->save();
         return redirect('index');
    }

    public function destroy($id)
    {
        $emp = user::find($id);
        $emp->delete();
        return redirect('index');
    }


    //end
}
