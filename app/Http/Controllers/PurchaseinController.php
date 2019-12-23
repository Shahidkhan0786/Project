<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\purchaseInvoice;
use App\ product;
use App\supplier;
class PurchaseinController extends Controller
{
    
    public function index()
    {
        $data = new supplier;
        $data1 = new product;

        $d =$data->all();
        $d1 =$data1->all();
        return view('purchasein' , compact('d' , 'd1'));
      
    }

    public function store(Request $request)
    {
        $data = new purchaseInvoice;
        $data->Supplier = $request->input('ssup');
        $data->product =  $request->input('pro');
        $data->quantity =  $request->input('quantity');
        $data->perunitprice=  $request->input('pup');
       
        $data->save();
          
          return redirect('index4');
      

    }

    // end
}
