@extends('backend.layouts.master')
@section('content_page')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rGObF6jz9ATKxIep9tiCxS/Z9fNfexbBH8qO2ms2hJSg9uBoFv06C6uKfr5ccFQ8" crossorigin="anonymous">
  <title>All Setting </title>
</head>
<style>
    .pagination {
    display: flex;
    justify-content: flex-end;
}

/* Styles for pagination links (adjust as needed) */
.pagination a {
    margin-left: 5px; /* Adjust spacing between pagination links */
    text-decoration: none;
    color: #333;
    padding: 5px 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

.pagination a:hover {
    background-color: #f0f0f0;
}

</style>
<body>

<div class="container border border-light shadow p-4 rounded">
    <h3 class=" text-primary mb-4 text-center" style='font-weight:bold'>ALL SETTINGS LIST</h3>
  <table class="table table-bordered rounded table-sm">
    <thead >

      <tr>
        <th class="bg-dark bg-gradient text-white">ID</th>
        <th class="bg-dark bg-gradient text-white">Name</th>
        <th class="bg-dark bg-gradient text-white">Value</th>
        <th class="bg-dark bg-gradient text-white">Description</th>
        {{-- <th class="bg-dark bg-gradient text-white">Tax Deductions</th>
        <th class="bg-dark bg-gradient text-white">Bonus</th> --}}
        <th class="bg-dark bg-gradient text-white">Data Type </th>
        <th class="bg-dark bg-gradient text-white">Action</th>
    </tr>
    </thead>
    <tbody>
        {{-- @php
            $i=1
        @endphp --}}
        @foreach ($settings as $setting)
        <tr>
            <td>{{++$sl}}</td>
            {{-- <td>{{$employee->id}}</td> --}}
            <td>{{$setting->name}}</td>
            <td>{{$setting->value}}</td>
            <td>{{$setting->data_type}}</td>
            <td>{{ $setting->description }}</td>


            {{-- @foreach ($employees as $employee)
            <td>{{$employee->email}}</td>
            @endforeach --}}

            <td>
                <a href="{{route('settings_details_view',$setting->id)}}" class="btn btn-info btn-sm text-white">View</a>
                <a href="{{route('settings_details_edit',$setting->id)}}" class="btn btn-primary btn-sm text-white">Edit</a>
                <a href="{{route('settings_details_delete',$setting->id)}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm text-white">Delete</a>

            </td>
          </tr>
        @endforeach

      <!-- Add more rows as needed -->
    </tbody>
  </table>

   {{-- //for pagination --}}

   <div class="pagination">
    {{ $settings->links('pagination::bootstrap-4') }}
</div>

<a href="{{route('settings_details_create')}}" class="btn btn-primary mb-3 ">Add Product</a>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-e5STZUs8i4MKQE6P/wxBXzquZq1TsLFtrGBsH75qbyIbbV9EP5C7nyFOy2u7b3jF" crossorigin="anonymous"></script>
</body>
</html>


@endsection
