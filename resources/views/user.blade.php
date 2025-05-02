@extends('layouts.layout')
@section('title','User')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Contact</th>
        <th scope="col">age</th>
        <th scope="col">city</th>
        <th scope="col">Gander</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->contact}}</td>
        <td>{{$user->age}}</td>
        <td>{{$user->city}}</td>
        <td>{{$user->gender}}</td>
        <td>
            <a href="" class="btn btn-primary">View</a>
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Delte</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
