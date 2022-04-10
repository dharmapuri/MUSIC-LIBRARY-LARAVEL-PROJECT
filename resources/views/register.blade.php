@extends('layout')

@section('content')

<div>
    <h1><u>User Registration Page</u></h1>
    <form method="post" action="register">
        @csrf
    <div class="col-sm-8">
    <div class="form-group">
  <label for="formGroupExampleInput">Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
   </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@stop