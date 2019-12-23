<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\productCatagory;
class product1Controller extends Controller
{
    public function index()
    {
        $data = new product;
        $data1 = new  productCatagory;
        $d1 =$data1->all();
        $d =$data->all();
        return view('product' , compact('d' ,'d1'));
      
    }

    public function store(Request $request)
    {
        $data = new product;
        $data->pname = $request->input('nam');
        $data->pcatagory =  $request->input('cat');
        $data->pbarcode =  $request->input('barcode');
       $data->pexpdate=  $request->input('xdate');
       $data->save();
          
          return redirect('index1');
      

    }

}
