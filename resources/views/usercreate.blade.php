@extends('layouts.layout')
@section('content')
<form>
    <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name">
      </div>
    <div class="form-group">
      <label for="exampleInputEmail">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputContact">Contact</label>
        <input type="text" class="form-control" id="exampleInputContact" placeholder="Enter Contact No">
      </div>
      <div class="form-group">
        <label for="exampleInputAge">Age</label>
        <input type="text" class="form-control" id="exampleInputAge" placeholder="Enter Age">
      </div>
      <div class="form-group">
        <label for="exampleInputCity">City</label>
        <input type="text" class="form-control" id="exampleInputCity" placeholder="Enter Name">
      </div>
      <div class="form-group">
        <label for="exampleInputName">Gender</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>Male</option>
            <option>Female</option>
          </select>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
