<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="row ">
    <div class="col-md-4"></div>
    <div class="col-md-4 mt-5">
   
  
  <form action="{{ action('PurchaseinController@store') }}" method="post" class="border p-5">
  @csrf
  <div class="form-group">
  <label for="catagory" class="">Select_Supplier:</label>
  <select class="form-control" name="ssup">
  
 
   @foreach($d as $row){
  
    <option value="{{$row['cname']}}"><?php echo $row['cname'] ?></option>
    
 @endforeach
   
    
  </select>
  </div>
    
    <div class="form-group">
  <label for="catagory" class="">Select_Product:</label>
  <select class="form-control" name="pro">
  
 
   @foreach($d1 as $row){
  
    <option value="{{$row['pname']}}"><?php echo $row['pname'] ?></option>
    
 @endforeach
   
    
  </select>
  </div>
    <div class="form-group">
      <label for="pup">Per-unit-price:</label>
      <input type="text" class="form-control" id="pup" placeholder="Enter per_unit_price" name="pup">
    </div>
    <div class="form-group">
      <label for="quantity">Quantity:</label>
      <input type="text" class="form-control" id="" placeholder="Enter quantity" name="quantity">
    </div>



    <button type="submit" class="btn btn-success btn-block">Submit</button>
  </form>

    </div>
    <div class="col-md-4"></div>
    </div>

</body>
</html>

