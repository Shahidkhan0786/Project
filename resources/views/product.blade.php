@extends('masterdash')

@section('adduser')


<!-- menurowend -->
<!-- tablestart -->
<div class="container mt-5">
<div class="row p-3"> 
<table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Product</th>
        <th>Barcode</th>
        <th>Expiry_date</th>
        <th>Catagory</th>
      </tr>
    </thead>
    <tbody>
    @foreach($d as $row1)
      <tr>
        <td>{{$row1['pname']}}</td>
        <td>{{$row1['pbarcode']}}</td>
        <td>{{$row1['pexpdate']}}</td>
        <td>{{$row1['pcatagory']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<!-- endtablerow -->
</div>
<!-- endtable -->
@endsection


@section('adduserf')
<!-- //testcatagory -->

<form action="{{ action('product1Controller@store') }}" method="POST" class="p-3 mt-3">
@csrf
  <div class="form-group">
    <label for="name " class="text-white font-weight-bold">Product_Name:</label>
    <input type="text" class="form-control" name="nam">
  </div>
  <div class="form-group">
    <label for="uname" class="text-white font-weight-bold">Barcode:</label>
    <input type="text" class="form-control" name="barcode">
  </div>
  <div class="form-group">
    <label for="uname" class="text-white font-weight-bold">Expiry_date:</label>
    <input type="text" class="form-control" name="xdate">
  </div>
  <div class="form-group">
  
  <label for="status" class="text-white font-weight-bold">Catagory:</label>
  <select class="form-control" name="cat">
  
    @foreach($d1 as $row)
    <option value="<?php echo $row['productcatagory']?>"><?php echo $row['productcatagory']?></option>
   
    @endforeach
  </select>
  </div>
  
  <button type="submit" class="btn btn-primary btn-block">ADD</button>
</form>

@endsection

