@extends('masterdash')

@section('adduser')


<!-- menurowend -->
<!-- tablestart -->
<div class="container mt-5">
<div class="row p-3"> 
<table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Product_Name</th>
        <th>Status</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach($d1 as $row)
      <tr>
        <td>{{$row['productcatagory']}}</td>
        <td>{{$row['status']}}</td>    
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

<form action="{{ action('productcat1Controller@store') }}" method="POST" class="p-3 mt-3">
   @csrf
  <div class="form-group">
    <label for="name " class="text-white font-weight-bold">Productcatagory:</label>
    <input type="text" class="form-control" name="nam">
  </div>
 
  <div class="form-group">
    <label for="catagory " class="text-white font-weight-bold">Status</label>
    <select class="form-control" name="stat">
  <option value="ACTIVE">ACTIVE</option>
  <option value="OFFLINE">NON-ACTIVE</option>
  
</select>
  </div>
 
  
  <button type="submit" class="btn btn-primary btn-block">ADD</button>
</form>

@endsection

