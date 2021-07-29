
@extends('layout')
@section('title')
 create categroy
@endsection
 @section('main')
 @include('cats.error')
 <form action="{{ url('/cats/store') }}" method="POST" enctype="multipart/form-data">
  @csrf
      <input type="text" placeholder="name" name="name"  >
      <br>
      <br>
      <input type="file" name="img">
      <br>
      <br>
      <textarea name="desc" placeholder="desc"  cols="30" rows="10"></textarea>
       <input type="submit" value="add">

 </form>
 @endsection

