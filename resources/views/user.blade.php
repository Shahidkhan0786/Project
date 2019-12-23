@extends('masterdash')

@section('adduser')


<!-- menurowend -->
<!-- tablestart -->
<div class="container mt-5">
<div class="row p-3"> 

<table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
       
        <th>Email</th>
        <th>Type</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

    
   
   @foreach($d as $row)
      <tr>
        <td>{{$row['uname']}}</td>
        <td>{{$row['email']}}</td>
        <td>{{$row['type']}}</td>
        <td>
        <div class="btn-group" role="group" aria-lable="Basic example">
        <a role="button" class="mt-2" href="{{action('user1Controller@edit' , $row['id'])}}">Edit | </a>
         <form action="{{action('user1Controller@destroy' , $row['id'])}}" method="post">
         @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-link">Delete</a>
         </form>
         </td>
        </td>
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
<form action="{{ action('user1Controller@store') }} " method="POST" class="p-3 mt-3">
   @csrf 
  <div class="form-group">
    <label for="name " class="text-white font-weight-bold">Name:</label>
    <input type="text" class="form-control" name="nam">
  </div>
  <div class="form-group">
    <label for="uname" class="text-white font-weight-bold">Email:</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="password" class="text-white font-weight-bold">Password:</label>
    <input type="password" class="form-control" name="pass">
  </div>
  <div class="form-group">
    <label for="type" class="text-white font-weight-bold">Type:</label>
    <input type="text" class="form-control" name="type">
  </div>
  
  
  <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>

@endsection