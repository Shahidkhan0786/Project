<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
        <style>
         .bg{
             background:url('images/sha.jpg ') no-repeat;
             background-size: cover;

             width: 100%;
            height: 100vh;
            
         }

         .log{
            -webkit-box-shadow: 18px -13px 33px 5px rgba(130,121,130,1);
-moz-box-shadow: 18px -13px 33px 5px rgba(130,121,130,1);
box-shadow: 18px -13px 33px 5px rgba(130,121,130,1);
         }

    
      
        </style>

</head>
<body>
<!-- <h1 class="text-success">Shahid kahn</h1> -->
<div class="container-fluid  ">

<div class="row">
<div class="col-md-4">

</div>

<div class="col-md-4 col-sm-12 mt-md-5 p-3">

<form class="p-5 mt-3  was-validated log " action="{{action('sloginController@check')}}" method="post">
@csrf
<h1 class="text-dark font-weight-bolder text-center p-3">Login</h1>
<div class="form-group">
 <lable for="UserName" class="text-dark font-weight-bolder">UserName</lable>
 <input type="text" palceholder="username" name="uname" class="form-control" required>
 <div class="valid-feedback">Valid</div>
 <div class="invalid-feedback text-danger">Please enter a correct username</div>
</div>
<div class="form-group">
 <lable for="password" class="text-dark font-weight-bolder">Password</lable>
 <input type="text" palceholder="password" name="pass" class="form-control" required>
 <div class="valid-feedback">Valid</div>
 <div class="invalid-feedback text-danger">Please enter a correct password</div>
</div>
<div class="form-group form-check">
 <lable class="form-check-lable">
 <input type="checkbox" name="chkbox" class="form-check-input" required><span class="text-white font-weight-bolder">remember me</span>
 <div class="valid-feedback">Valid</div>
 
 </lable>
</div>
<button type="submit" class="btn btn-success btn-block">Login</button>
</form>

</div>

<div class="col-md-4"></div>


    </div>
    </div>
</body>
</html>