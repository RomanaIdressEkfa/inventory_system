@extends('backend.layouts.master')
@section('content_page')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rGObF6jz9ATKxIep9tiCxS/Z9fNfexbBH8qO2ms2hJSg9uBoFv06C6uKfr5ccFQ8" crossorigin="anonymous">
  <title>All Product </title>
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
    {{-- <h1> {{$date->toDateString()}}</h1>
    <h1> {{$date->toTimeString()}}</h1>
    <h1> {{$date->formatLocalized('%A')}}</h1> --}}
    <h3 class=" text-primary mb-4 text-center" style='font-weight:bold'> ATTENDANCE SHEET</h3>
  <table class="table table-bordered rounded table-sm">
    <thead >

      <tr>
        <th class="bg-dark bg-gradient text-white">ID</th>
        {{-- <th class="bg-dark bg-gradient text-white">Employee ID</th> --}}
        <th class="bg-dark bg-gradient text-white">Employee Name</th>
        <th class="bg-dark bg-gradient text-white">Attendance_date</th>
        <th class="bg-dark bg-gradient text-white">Overtime_hours</th>
        <th class="bg-dark bg-gradient text-white">Status</th>
        {{-- <th class="bg-dark bg-gradient text-white">Action</th> --}}
    </tr>
    </thead>
    <tbody>
        {{-- @php
            $i=1
        @endphp --}}
        @foreach ($attendences as $attendence)
        <tr>
            {{-- <td>{{++$sl}}</td> --}}
            <td>{{$attendence->id }}</td>
            <td>{{$attendence->employee->name }}</td>
            <td>{{$attendence->attendance_date}}</td>
            <td>{{$attendence->overtime_hours}}</td>
            {{-- <td>
                @if ($attendence->status == 1)
                    <span class="badge badge-primary badge-pill float-right">On Time</span>
                @else
                    <span class="badge badge-danger badge-pill float-right">Late</span>
                @endif
            </td> --}}
            <td>
                @if($attendence->status==0)
                    <a href="{{route('active',$attendence->id) }}" class="btn btn-sm btn-{{$attendence->status? 'success':'danger'}}">
                        {{$attendence->status? 'Present':'Absent'}}
                    </a>
                @else
                    <a href="{{route('inactive',$attendence->id) }}" class="btn btn-sm btn-{{$attendence->status? 'success':'danger'}}">
                        {{$attendence->status? 'Present':'Absent'}}
                    </a>

                @endif

            </td>



            {{-- @foreach ($employees as $employee)
            <td>{{$employee->email}}</td>
            @endforeach --}}

            {{-- <td>
                <a href="{{route('attendence_details_view',$attendence->id)}}" class="btn btn-info btn-sm text-white">View</a>
                <a href="{{route('attendence_details_edit',$attendence->id)}}" class="btn btn-primary btn-sm text-white">Edit</a>
                <a href="{{route('attendence_details_delete',$attendence->id)}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm text-white">Delete</a>

            </td> --}}
          </tr>
        @endforeach

      <!-- Add more rows as needed -->
    </tbody>
  </table>

   {{-- //for pagination --}}

   <div class="pagination">
    {{ $attendences->links('pagination::bootstrap-4') }}
</div>

<a href="{{route('attendence_details_create')}}" class="btn btn-primary mb-3 ">Add Attendance</a>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-e5STZUs8i4MKQE6P/wxBXzquZq1TsLFtrGBsH75qbyIbbV9EP5C7nyFOy2u7b3jF" crossorigin="anonymous"></script>
</body>
</html>


@endsection
