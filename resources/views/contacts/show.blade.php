@extends('layouts.app')

@section('content')
<div class="container">
    <h1>show data page</h1>     
  
  <p>{{$employee->company}}</p>
 
  <p>{{$employee->full_name}}</p>
  
</div>

 @endsection