@extends('layouts.layout')

@section('content')
    
<h1>create page</h1>

<form action="/contacts/create" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">full name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="full_name">
    </div>
 
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">company</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="company">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">phone number</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="phone_number">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">addres</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="addres">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">job title</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="job_title">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">salary</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="salary">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">join date</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="join_date">
    </div>
 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
