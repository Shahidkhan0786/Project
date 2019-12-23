<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product;
class salesController extends Controller
{
    public function index(Request $request)
    {
        $rec = $request->input('search');
        $record=product::where('pbarcode','=',$rec)->get();
      $obj = new product;
      $data = $obj->all();
    //   $record =array("pname"=>"noo");
       return view('sales' , compact('data' ,'record'));
    }

    public function show(Request $request)
    {
        
  $obj = new product;
  $rec = $request->input('search');
  $record=product::where('pbarcode','=',$rec)->get();
  $data = $obj->all();
    // //   return $record;
   return view('sales' , compact('data' ,'record'));
    }


    // end
}
