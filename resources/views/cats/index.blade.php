  @extends('layout')

  @section('title')
   all categroy
  @endsection

 @section('main')



 <h1>all category</h1>
  <a href="{{ url('/cats/create') }}">AddCategory</a>
   <form action="{{ url('/cats/search') }}" method="GET" enctype="multipart/form-data">
    @csrf
       <input type="text" name="keyword" placeholder="search">
         <br>
         <input type="submit" value="search">


   </form>



  @foreach ($cats as $cat )
       <hr>
       <a href="{{ url('/cats/create') }}">AddCategroy</a>
   <a href="{{ url("/cats/show/$cat->id") }}"> <h2>{{ $cat->id }} - {{ $cat->name }}</h2></a>
   <a href="{{ url("/cats/edit/$cat->id") }}">Edit</a>
   <a href="{{ url("/cats/delete/$cat->id") }}">Delete</a>
   <img src="{{ asset("upload/$cat->img") }}" height="100px">
    <p>{{ $cat->desc }}</p>
  @endforeach
  {{ $cats->links() }}
 @endsection

