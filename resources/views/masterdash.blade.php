<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
   <style>
   .hed{
       font-size:60px;
       line-height:90px;
   }

.hei{
    height:86vh;
}
.siz{
    font-size:90px;
    
}
.shad{
    -webkit-box-shadow: -1px 7px 115px -9px rgba(0,0,0,0.54);
-moz-box-shadow: -1px 7px 115px -9px rgba(0,0,0,0.54);
box-shadow: -1px 7px 115px -9px rgba(0,0,0,0.54);
border-radius:10px;
}
.mar{
    margin-left:0;
    padding:0;
}

   </style>
</head>
<body class="bg-warning"  style="width:100%">
   
    <div class="container-fluid  bg-dark">
    <h1 class= "font-weight-bolder text-center bg-dark text-uppercase hed d-inline text-white">Inventory Managment System</h1>

      
      <a href="login"><button class="btn btn-outline-success my-2 my-sm-0 d-inline ml-5 " type="submit">Log-out</button></a>
    </div>

    <!-- mainbodycontinerstart-->
    <div class="container-fluid">

    <!-- mainrowstart -->
    <div class="row hei">


       <!-- leftmainportionstart -->
    <div class="col-md-3 col-sm-3 col-10 bg-dark">
     @yield('adduserf')
    
    </div>
      <!-- leftportionend -->

      <!-- rightmainportionstart -->
    <div class="col-md-9 col-sm-9 col-10 bg-white mar">
    
        @yield('homemenu')
        @yield('adduser')
  
     </div>
      <!-- rightmainportionend -->
    </div>
       <!-- mainrowend -->
    </div>
     <!-- mainbodycontainerend -->

</body>
</html>