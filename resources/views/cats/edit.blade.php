    @extends('layout')
    @section('title')
     edit categroy
    @endsection
   @section('main')
   @include('cats.error')
   <form action="{{ url("/cats/update/$cat->id") }}" method="POST">
    @csrf
        <input type="text" value="{{ $cat->name }}" name="name"  >
        <br>
        <br>
        <textarea name="desc"   cols="30" rows="10">{{ $cat->desc }}</textarea>
         <input type="submit" value="edit">

   </form>
   @endsection

