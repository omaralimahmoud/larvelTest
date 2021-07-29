@extends('layout')

  @section('title')
   latest {{ $num }}categroy
  @endsection

 @section('main')
 <h1>latest {{ $num }} category</h1>
  <a href="{{ url('/cats') }}">back</a>
  @foreach ($cats as $cat )
       <hr>
   <a href="{{ url("/cats/show/$cat->id") }}"> <h2>{{ $cat->id }} - {{ $cat->name }}</h2></a>
   <a href="{{ url("/cats/edit/$cat->id") }}">Edit</a>
   <a href="{{ url("/cats/delete/$cat->id") }}">Delete</a>
    <p>{{ $cat->desc }}</p>
  @endforeach
 @endsection
