@extends('backend.layouts.master')
@section('content_page')
<div class="container p-3">

    <a href="{{ route('employee_details_index')}}">
        <h2>All Employee List</h2> </a>
    <div class="border border-1 p-3">
        <p> <b>Name :</b> {{ $employee->name?? 'No Name Available '}}</p>
        <p> <b>Email :</b> {{ $employee->email?? 'No email Available '}}</p>
        <p> <b>Address :</b> {{ $employee->address?? 'No address Available '}}</p>
        <p> <b>Phone Number:</b> {{ $employee->phone_number?? 'No Phone Number Available'}}</p>
        <b>Image:</b>
        <img style="width: 150px;" src="{{asset('images/employees/'.$employee->image)}}" alt="">
        <p> <b>NID No :</b> {{ $employee->nid_no?? 'No NID No Available '}}</p>
        <p> <b>Salary :</b> {{ $employee->salary?? 'No Salary Available '}}</p>



    </div>


</div>


@endsection
