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
   /* .hed{
       font-size:60px;
       line-height:90px;
   } */

.hei{
    height:92vh;
}

.mar{
    margin:0;
    padding:0;
}
body {
    margin:0;
    padding:0;
    background-color:red;
}

mark {
  background-color: black;
  color: red;
  border-radius:10px;
}
.mar{
    margin-left:0;
    padding:0;
}

   </style>
</head>
<body >
  <?php 
  
  if(session()->has('login'))
  $na= session()->get('login');
  else
  $na="Shahid";
   ?>
    <div class="container-fluid  bg-primary p-2">
    <h3 class= "font-weight-bolder  bg-primary text-uppercase text-white"><i>{{$na}}</i></h3>
    <h3 class= "font-weight-bolder  bg-primary text-uppercase text-white text-right"><mark><i><?php 
    date_default_timezone_set('Asia/Karachi');
    echo date('h:i:s A');  ?></i></mark></h3>
    </div>

    <!-- mainbodycontinerstart-->
    <div class="container-fluid  ">

    <!-- mainrowstart -->
    <div class="row hei ">


       <!-- leftmainportionstart -->
    <div class="col-md-3 col-sm-3  bg-dark ">
      
      @yield('salescalc')
      @yield('catagoryadd')
    </div>
      <!-- leftportionend -->

      <!-- rightmainportionstart -->
    <div class="col-md-9 col-sm-9 bg-white mar">
    
        @yield('salesdashbord')
        @yield('catagoryview')
  
     </div>
      <!-- rightmainportionend -->
    </div>
       <!-- mainrowend -->
    </div>
     <!-- mainbodycontainerend -->

</body>
</html>