@extends('layout')
@section('title')
show categery{{ $Cat->name }}
@endsection


  @section('main')
  <h1>show categery {{ $Cat->name }}</h1>

  <hr>
<h2>{{ $Cat->id }} - {{ $Cat->name }}</h2>
<p>{{ $Cat->desc }}</p>
<small> cteated_at: {{ $Cat->created_at }}</small>
<a href="{{ url('/cats') }}">Back</a>

  @endsection
