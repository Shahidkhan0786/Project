<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $data = new supplier;

        $d =$data->all();
        return view('Supplier' , compact('d'));
      
    }

    public function store(Request $request)
    {
        $data = new supplier;
        $data->cname = $request->input('cnam');
        $data->Suppliername =  $request->input('snam');
        $data->phone =  $request->input('phone');
       $data->address=  $request->input('ad');
       $data->status=  $request->input('stat');
       $data->save();
          
          return redirect('index3');
      

    }





    // end
}
