@extends('layout')

@section('content')
<div>
    <u><h1>List Of Music Albums </h1></u>
     @if(Session::get('status'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Album Added Successfully!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
     @endif
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">View Album</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->name}}</th>
      <td>{{$item->email}}</td>
      <td><a href="{{url('/view',$item->id)}}">View</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@stop