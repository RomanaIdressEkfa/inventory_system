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

<div class="container ">
    <h4 class="text-primary mb-4 "> <u>All Employee List</u></h4>
  <table class="table table-bordered shadow rounded">
    <thead >
      <tr >
        <th class="bg-dark bg-gradient text-white">ID</th>
        <th class="bg-dark bg-gradient text-white">Name</th>
        <th class="bg-dark bg-gradient text-white">Phone Number</th>
        <th class="bg-dark bg-gradient text-white">Image</th>
        <th class="bg-dark bg-gradient text-white">Salary</th>
        <th class="bg-dark bg-gradient text-white">Action</th>
      </tr>
    </thead>
    <tbody>
        {{-- @php
            $i=1
        @endphp --}}
        @foreach ($employees as $key=>$employee)
        <tr>
            {{-- <td>{{$i++}}</td> --}}
            <td>{{$employee->id}}</td>
            <td>{{$employee->name}}</td>
            <td>{{$employee->phone_number}}</td>
            <td>
                <img style="width:120px;" src="{{asset('images/employees/'.$employee->image)}}" alt="">
            </td>
            <td>{{$employee->salary}}</td>
            <td>
                <a href="{{route('employee_details_view',$employee->id)}}" class="btn btn-info">View</a>
                <a href="{{route('employee_details_edit',$employee->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route('employee_details_delete',$employee->id)}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>

            </td>
          </tr>
        @endforeach

      <!-- Add more rows as needed -->
    </tbody>
  </table>

   {{-- //for pagination --}}

   <div class="justify-content-end">
    {{ $employees->links('pagination::bootstrap-4') }}
</div>




</div>
<a href="{{route('employee_details_create')}}" class="btn btn-primary mt-2 mb-5">Add Employee</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-e5STZUs8i4MKQE6P/wxBXzquZq1TsLFtrGBsH75qbyIbbV9EP5C7nyFOy2u7b3jF" crossorigin="anonymous"></script>
</body>
</html>


@endsection
