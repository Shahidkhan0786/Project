<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productCatagory;
class productcat1Controller extends Controller
{
    
    public function index()
    {
        
        $data1 = new  productCatagory;
        $d1 =$data1->all();
       
        return view('pcatagory' , compact('d1'));
      
    }

    public function store(Request $request)
    {
        $data = new productCatagory;
        $data->productcatagory = $request->input('nam');
        $data->status =  $request->input('stat');
       
          $data->save();
          
           return redirect('index2');
      

    }

    //end
}
