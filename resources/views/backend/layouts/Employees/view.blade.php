@extends("backend.layouts.master")
@section("content_page")
    <div class="container p-3">

        <a href="{{ route("employee_details_index") }}">
            <h4 class="text-primary mb-3"> <u>All Employee List</u></h4>
        </a>
        <a target="_blank" class="btn btn-primary btn-sm mt-2 mb-2 float-end" href="{{ route("employees_details_pdf", $employee->id) }}">Export PDF</a>
        <div class="border border-1 p-3">
            <table class="table table-bordered shadow-sm">
                <h4 class="text-primary"> <u> <b>{{ $employee->name ?? "No Name Available" }}:</b> </u></h4>
                <tr>
                    <th>Name:</th>
                    <td>{{ $employee->name ?? "No Name Available" }}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>{{ $employee->email ?? "No Email Available" }}</td>
                </tr>
                <tr>
                    <th>Address:</th>
                    <td>{{ $employee->address ?? "No Address Available" }}</td>
                </tr>
                <tr>
                    <th>Phone Number:</th>
                    <td>{{ $employee->phone_number ?? "No Phone Number Available" }}</td>
                </tr>
                <tr>
                    <th>Image:</th>
                    <td>
                        @if (isset($employee->image) && !empty($employee->image))
                            <img style="width: 120px;" src="{{ asset("images/employees/" . $employee->image) }}" alt="Employee Image">
                        @else
                            No Picture Available
                        @endif
                    </td>
                </tr>

                <tr>
                    <th>NID No:</th>
                    <td>{{ $employee->nid_no ?? "No NID No Available" }}</td>
                </tr>
                <tr>
                    <th>Salary:</th>
                    <td>{{ $employee->salary ?? "No Salary Available" }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
