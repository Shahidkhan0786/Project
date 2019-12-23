<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php  $idd=0; ?>
@foreach($rec as $row)
<?php $idd=$row['id'];   ?>
@endforeach
<form action="{{action('user1Controller@update' ,$idd)}}" method="post">
  @method('PUT')
  @csrf
   <div class="container col-md-4 p-5">
  <div class="form-group">
    <label for="exampeInputEmail1">Name</label>
    <input type="text" class="form-control" name="nam" aria-describedby="emailHelp" placeholder="" value ="@foreach($rec as $row){{$row['uname']}} @endforeach"">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value ="@foreach($rec as $row){{$row['email']}} @endforeach"" >
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Type</label>
    <input type="text" class="form-control" name="type" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value ="@foreach($rec as $row){{$row['type']}} @endforeach"">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password" value ="@foreach($rec as $row){{$row['password']}} @endforeach"">
  </div>
 
  <button type="submit" class="btn btn-primary btn-block">Update</button>
  </div>
</form>

</body>
</html>