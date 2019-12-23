
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
       margin-left:120px;
   }

.hei{
    height:85vh;
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
<body>
<div class="container-fluid  bg-dark">
    <h1 class= "font-weight-bolder text-center bg-dark text-uppercase hed d-inline text-white">Inventory Managment System</h1>

      
      <a href="login"><button class="btn btn-outline-success my-2 my-sm-0 d-inline ml-5 " type="submit">Log-out</button></a>
    </div>
  
<div class="container">
        <!-- rightportion -->
     <div class="row  h-25 container mt-5">
      
     <div class="col-md-2 col-sm -10 border offset-md-1 shad"><a href="" data-toggle="modal" data-target="#myModal"><span class="fa fa-users siz  p-3"></span></a>
     <p class="text-center">Users</p>
     
     <!-- ------------------------------------ -->
     <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
      
        
        <!-- Modal body -->
        <div class="modal-body">
          Login
          <form action="{{ action('Login1Controller@store')}}"  method="post">
           @csrf

           <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>


          </form>
        </div>
        
        <!-- Modal footer -->
       
        
      </div>
    </div>
  </div>

     <!-- ////////////////////////////// -->
     </div>
       

      <!-- seconditem -->
     <div class="col-md-2 col-sm -10 border offset-md-1 shad"><a href="index1"><img src="images/product.png" class="p-3 mt-2" ></a>
     <p class="text-center">Products</p></div>
    <!-- seconditemend -->
    <!-- thirditem -->
    <!-- <div class="col-md-2  col-sm -10 border offset-md-1 shad"><a href="user"><img src="images/stock.png" class="p-3 mt-2" ></a>
     <p class="text-center">Stock</p></div> -->
     <div class="col-md-2 col-sm -10 border offset-md-1 mt-2 shad"><a href="Supplier"><img src="images/return.png" class="p-3 mt-2" ></span></span></a>
     <p class="text-center">Sales return</p></div>
     <!-- thirditemend -->
     <!-- fouritem -->
     <!-- start -->
     <div class="col-md-2  col-sm -10 border offset-md-1 shad"><a href="index4"><img src="images/purchase.png" class="p-3 mt-2" ></a>
     <p class="text-center">Purchase Invoice</p></div>
     <!-- end -->
     </div>
       <!-- row2 -->

       <div class="row  h-25 container mt-5">
     <!-- start -->
     <div class="col-md-2 col-sm -10 border offset-md-1 mt-2 shad"><a href="sale"><img src="images/sales.png" class="p-3 mt-2" ></a>
     <p class="text-center">Sales</p></div>
     <!-- end -->

     <!-- start -->
     <div class="col-md-2 col-sm -10 border offset-md-1 mt-2 shad"><a href="index2"><img src="images/catagories.png" class="p-3 mt-2" ></a>
     <p class="text-center">Product Catagory</p></div>
     <!-- end -->

     <!-- start -->
     <div class="col-md-2 col-sm -10 border offset-md-1 mt-2 shad"><a href="index3"><img src="images/supplier.png" class="p-3 mt-2" ></span></a>
     <p class="text-center">Supplier</p></div>
     <!-- end -->
    <!-- start -->
    <!-- <div class="col-md-2 col-sm -10 border offset-md-1 mt-2 shad"><a href="pp"><img src="images/pricing.png" class="p-3 mt-2" ></span></span></a>
     <p class="text-center">Product pricing</p></div> -->
     <!-- end -->

     </div>
         <!-- row3 -->
     <div class="row  h-20 container mt-5">
     <!-- <div class="col-md-2 col-sm -10 border offset-md-1 mt-2 shad"><a href="Supplier"><img src="images/return.png" class="p-3 mt-2" ></span></span></a>
     <p class="text-center">Sales return</p></div>
     
     </div> -->
      <!-- row3end -->
    </div>
</div>

    </body></html>



