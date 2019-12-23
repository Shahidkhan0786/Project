<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\purchaseInvoice;
class productpController extends Controller
{
    
    public function index(Request $request)
    {
       $obj = new purchaseInvoice;
       $data = $obj->all();
       return view('productpricing' , compact('data'));
    }
    
}
