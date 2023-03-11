@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{route('create')}}" class="btn btn-primary btn-lg">create</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">full name</th>
            <th scope="col">company</th>
            <th scope="col">phone number</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($employees as $item)
          <tr>     
            <th scope="row">{{$loop->index +1}}</th>
            <td>{{$item->full_name}}</td>
            <td>{{$item->company}}</td>
            <td>{{$item->phone_number}}</td>
            <td>
              <a class="btn text-warning" href="{{url('contacts/update/' . $item->id)}} "><i class="fa-solid fa-pen-to-square"></i> </a>
              <a class="btn text-danger" href="{{url('delete/' . $item->id)}} "><i class="fa-solid fa-trash-can"></i> </a>
              <a class="btn text-info" href="{{url('contacts/show/' . $item->id)}} "><i class="fa-solid fa-eye"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
