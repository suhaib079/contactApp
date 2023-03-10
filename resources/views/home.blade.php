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
          </tr>
        </thead>
        <tbody>
          @foreach ($employees as $item)
          <tr>     
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->full_name}}</td>
            <td>{{$item->company}}</td>
            <td>{{$item->phone_number}}</td>
            <td>
              <button>Delete</button>
              <a href="{{url('contacts/update/' . $item->id)}}">update </a>
              <button>info</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
