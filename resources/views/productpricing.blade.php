@extends('masterdash')

@section('adduser')

<div class="container-fluid bg-info">
<div class="row bg-info">
<button class="btn btn-info col-md-2">ADD</button>
<button class="btn btn-info col-md-2">EDIT</button>
<button class="btn btn-info col-md-2">DEL</button>
<button class="btn btn-info col-md-2">VIEW</button>
<form class="form-inline col-md-4" action="">
    <input class="form-control col-md-8" type="text" placeholder="Search">
    <button class="btn btn-info" type="submit">Search</button>
  </form>
</div>
</div>
<!-- menurowend -->
<!-- tablestart -->
<div class="container mt-5">
<div class="row p-3"> 
<table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Product</th>
        <th>Buying_price</th>
        <th>profit</th>
        <th>Sell_Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Milk</td>
        <td>200</td>
        <td>20</td>
        <td>220</td>
      </tr>
      <tr>
      <td>Milk</td>
        <td>200</td>
        <td>20</td>
        <td>220</td>
      </tr>
      <tr>
      <td>Milk</td>
        <td>200</td>
        <td>20</td>
        <td>220</td>
      </tr>
    </tbody>
  </table>
</div>
<!-- endtablerow -->
</div>
<!-- endtable -->
@endsection
<!-- form -->
@section('adduserf')
<form action="{{action('productpController@index')}}" method ="post" class="p-3 mt-3">
@csrf
  <div class="form-group">
  <label for="status" class="text-white font-weight-bold">Status:</label>
  <select class="form-control">
    @foreach($data as $row)
    <option value="{{$row['product']}}">{{$row['product']}}</option>
    @endforeach
    
  </select>
  </div>
  
  <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>

@endsection
