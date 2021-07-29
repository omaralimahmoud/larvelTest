@extends('layout')

@section('title')
 search categroy For {{ $keyword }}
@endsection

@section('main')
<h1>search category For {{ $keyword }}</h1>
<a href="{{ url('/cats') }}">Back To All</a>
 <form action="{{ url('/cats/search') }}" method="GET">
    @csrf
     <input type="text" name="keyword" placeholder="search" value="{{ $keyword }}">
       <br>
       <input type="submit" value="search">


 </form>



@foreach ($cats as $cat )
     <hr>
 <a href="{{ url("/cats/show/$cat->id") }}"> <h2>{{ $cat->id }} - {{ $cat->name }}</h2></a>
 <a href="{{ url("/cats/edit/$cat->id") }}">Edit</a>
 <a href="{{ url("/cats/delete/$cat->id") }}">Delete</a>
  <p>{{ $cat->desc }}</p>
@endforeach
@endsection

