@extends('masterdash')

@section('adduser')


<!-- menurowend -->
<!-- tablestart -->
<div class="container mt-5">
<div class="row p-3"> 
<table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Company_Name</th>
        <th>Supplier_Name</th>
        <th>Phone_No</th>
        <th>Address</th>
        <th>Status</th>

      </tr>
    </thead>
    <tbody>

    @foreach($d as $row)
      <tr>
        <td>{{$row['cname']}}</td>
        <td>{{$row['Suppliername']}}</td>
        <td>{{$row['phone']}}</td>
        <td>{{$row['address']}}</td>
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
<!-- form -->
@section('adduserf')
<form action="{{ action('SupplierController@store') }}" method="POST" class="p-3 mt-3">
 @csrf
  <div class="form-group">
    <label for="name " class="text-white font-weight-bold">Company_Name:</label>
    <input type="text" class="form-control" name="cnam">
  </div>
  <div class="form-group">
    <label for="sname " class="text-white font-weight-bold">Supplier_Name:</label>
    <input type="text" class="form-control" name="snam">
  </div>

  <div class="form-group">
    <label for="uname" class="text-white font-weight-bold">Phone:</label>
    <input type="text" class="form-control" name="phone">
  </div>
  <div class="form-group">
    <label for="address" class="text-white font-weight-bold">Address:</label>
    <input type="text" class="form-control" name="ad">
  </div>
  <div class="form-group">
  <label for="status" class="text-white font-weight-bold">Status:</label>
  <select class="form-control" name="stat">
    <option value="Active">Active:</option>
    <option value="Non Active">Unactive</option>
    
  </select>
  </div>
  
  <button type="submit" class="btn btn-primary btn-block">ADD</button>
</form>

@endsection