@extends("backend.layouts.master")
@section("content_page")
    <div class="container border border-light shadow mt-2 rounded p-4">

        <a class="btn btn-primary btn-sm mt-2 mb-4 float-left bi bi-wallet2" href="{{ route("employee_details_index") }}">
            All Employee List
        </a>
        <a target="_blank" class="btn btn-primary btn-sm mt-2 mb-2 ml-2 float-end bi bi-file-earmark-pdf-fill" href="{{ route("employees_details_pdf", $employee->id) }}">Export PDF</a>
        <div>
            <h6 class="text-gray-500 mb-5 mt-3" style='font-weight:bold'>VIEW EMPLOYEE</h6>

        <h5 style="font-weight: bold">Name:</h5>
        <p>{{ $employee->name ?? "No Name Available" }}</p>

        <h5 style="font-weight: bold">Email:</h5>
        <p>{{ $employee->email ?? "No Email Available" }}</p>

        <h5 style="font-weight: bold">Address:</h5>
        <p>{{ $employee->address ?? "No Address Available" }}</p>

        <h5 style="font-weight: bold">Phone Number:</h5>
        <p> {{ $employee->phone_number ?? "No Phone Number Available" }}</p>
        
        <h5 style="font-weight: bold">Department:</h5>
        <p>{{ $employee->department ?? "No Department Available" }}</p>

        <h5 style="font-weight: bold">Position:</h5>
        <p>{{ $employee->position ?? "No Position Available" }}</p>

        <h5 style="font-weight: bold">Date of Birth:</h5>
        <p>{{ $employee->date_of_birth ?? "No Date of Birth Available" }}</p>

        <h5 style="font-weight: bold">Hire Date:</h5>
        <p>{{ $employee->hire_date ?? "No Hire Date Available" }}</p>

        <h5 style="font-weight: bold">Image:</h5>
        <p>
             @if (isset($employee->image) && !empty($employee->image))
            <img style="width: 120px;" src="{{ asset("images/employees/" . $employee->image) }}" alt="Employee Image">
        @else
            No Picture Available
        @endif
        </p>

        <h5 style="font-weight: bold">NID No:</h5>
        <p>{{ $employee->nid_no ?? "No NID No Available" }}</p>

        <h5 style="font-weight: bold">Salary:</h5>
        <p>{{ $employee->salary ?? "No Salary Available" }}</p>

        </div>
    </div>
@endsection
