@extends("backend.layouts.master")
@section("content_page")
    <!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rGObF6jz9ATKxIep9tiCxS/Z9fNfexbBH8qO2ms2hJSg9uBoFv06C6uKfr5ccFQ8"
                crossorigin="anonymous">
            <title>Add Attendence</title>
        </head>

        <body>

            <div class="container border border-light shadow p-4 rounded">
                <h3 class=" text-primary mb-4 text-center" style='font-weight:bold'>ADD ATTENDANCE</h3>
                <form action="{{ route("attendence_details_store") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Employee ID</th>
                                <th>Employee Name</th>
                                <th>Attendance Date</th>
                                <th>Clock In Time</th>
                                <th>Clock Out Time</th>
                                <th>Overtime Hours</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select class="form-select" aria-label="Employee ID" name="employee_id">
                                        <option selected>Select Employee ID</option>
                                        @foreach ($employees as $employee)
                                            <option value="{{ $employee->id }}">{{ $employee->id }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select" aria-label="Employee Name" name="employee_id">
                                        <option selected>Select Employee Name</option>
                                        @foreach ($employees as $employee)
                                            <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input type="date" class="form-control" id="attendance_date" name="attendance_date">
                                </td>
                                <td>
                                    <input type="time" class="form-control" id="clock_in_time" name="clock_in_time">
                                </td>
                                <td>
                                    <input type="time" class="form-control" id="clock_out_time" name="clock_out_time">
                                </td>
                                <td>
                                    <input type="number" class="form-control" id="overtime_hours" name="overtime_hours">
                                </td>
                                <td>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1">Present</option>
                                        <option value="0">Absent</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary mb-3">Submit</button>
                </form>

            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-e5STZUs8i4MKQE6P/wxBXzquZq1TsLFtrGBsH75qbyIbbV9EP5C7nyFOy2u7b3jF" crossorigin="anonymous">
            </script>
        </body>

    </html>

    <script>
        document.getElementById('image').addEventListener('change', function() {
            var input = this;

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    // Update the src attribute of the image element to show the preview
                    document.getElementById('imagePreview').src = e.target.result;
                    // Show the image preview
                    document.getElementById('imagePreview').style.display = 'block';
                    document.getElementById('imagePreviewDiv').style.display = 'block';
                };

                reader.readAsDataURL(input.files[0]);
            }
        });
    </script>
@endsection
