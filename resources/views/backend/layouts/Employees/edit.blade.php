@extends('backend.layouts.master')
@section('content_page')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rGObF6jz9ATKxIep9tiCxS/Z9fNfexbBH8qO2ms2hJSg9uBoFv06C6uKfr5ccFQ8" crossorigin="anonymous">
  <title>Edit Employee</title>
</head>
<body>

<div class="container mt-5">
    <h2>Edit Employee Form</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::has('msg'))
<p class="alert alert-success">{{Session::get('msg')}}</p>
@endif
<form action="{{route('employee_details_update',$employee->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{$employee->name}}" placeholder="Enter your name">
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" name="email" value="{{$employee->email}}" placeholder="name@example.com">
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label">Phone Number</label>
      <input type="tel" class="form-control" id="phone_number" name="phone_number" value="{{$employee->phone_number}}" placeholder="Enter your phone number">
    </div>

    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <textarea class="form-control" id="address" rows="3" name="address" value="{{$employee->address}}" placeholder="Enter your address"></textarea>
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Upload Image</label>
      <img style="width: 150px;" src="{{asset('images/employees/'.$employee->image)}}" alt="">
      <input type="file" class="form-control" id="image" name="image">
    </div>

    <div class="mb-3">
      <label for="nid" class="form-label">NID Number</label>
      <input type="text" class="form-control" id="nid" name="nid_no" value="{{$employee->nid_no}}" placeholder="Enter your NID number">
    </div>

    <div class="mb-3">
      <label for="salary" class="form-label">Salary</label>
      <input type="text" class="form-control" id="salary" name="salary" value="{{$employee->salary}}" placeholder="Enter your salary">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-e5STZUs8i4MKQE6P/wxBXzquZq1TsLFtrGBsH75qbyIbbV9EP5C7nyFOy2u7b3jF" crossorigin="anonymous"></script>
</body>
</html>


@endsection
