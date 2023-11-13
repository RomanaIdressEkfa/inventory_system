@extends('backend.layouts.master')
@section('content_page')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rGObF6jz9ATKxIep9tiCxS/Z9fNfexbBH8qO2ms2hJSg9uBoFv06C6uKfr5ccFQ8" crossorigin="anonymous">
  <title>All Employee</title>
</head>
<body>

<div class="container mt-5">
    <h2>All Employee List</h2>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Image</th>
        <th>Salary</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @php
            $i=1
        @endphp
        @foreach ($employees as $key=>$employee)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$employee->name}}</td>
            <td>{{$employee->phone_number}}</td>
            <td>
                <img style="width:150px;" src="{{asset('images/employees/'.$employee->image)}}" alt="">
            </td>
            <td>{{$employee->salary}}</td>
            <td>
                <a href="#" class="btn btn-info">View</a>
                <a href="{{route('employee_details_edit',$employee->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route('employee_details_delete',$employee->id)}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>

            </td>
          </tr>
        @endforeach

      <!-- Add more rows as needed -->
    </tbody>
  </table>
</div>
<a href="{{route('employee_details_create')}}" class="btn btn-success mt-5 mb-5">Add Employee</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-e5STZUs8i4MKQE6P/wxBXzquZq1TsLFtrGBsH75qbyIbbV9EP5C7nyFOy2u7b3jF" crossorigin="anonymous"></script>
</body>
</html>


@endsection
