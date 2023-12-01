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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example" name="employee_id">
                                    <option selected>IMPLOYEE ID:</option>
                                   @foreach ($employees as $employee)
                                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="attendance_date" class="form-label">Attendance Date</label>
                                <input type="date" class="form-control" id="attendance_date" name="attendance_date" placeholder="Enter your attendance_date">
                                @if ($errors->has("attendance_date"))
                                    <p class="text-danger">{{ $errors->first("attendance_date") }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="clock_in_time" class="form-label">clock_in_time</label>
                                <input type="time" class="form-control" id="clock_in_time" name="clock_in_time" placeholder="Enter your clock_in_time">
                                @if ($errors->has("clock_in_time"))
                                    <p class="text-danger">{{ $errors->first("clock_in_time") }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="clock_out_time" class="form-label">clock_out_time</label>
                                <input type="time" class="form-control" id="clock_out_time" name="clock_out_time" placeholder="Enter your clock_out_time">
                                @if ($errors->has("clock_out_time"))
                                    <p class="text-danger">{{ $errors->first("clock_out_time") }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="overtime_hours" class="form-label">overtime_hours</label>
                                <input type="number" class="form-control" id="overtime_hours" name="overtime_hours" placeholder="Enter your overtime_hours">
                                @if ($errors->has("overtime_hours"))
                                    <p class="text-danger">{{ $errors->first("overtime_hours") }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="status" class="form-label">status </label>
                                <input type="text" class="form-control" id="status" name="status" placeholder="Enter your status">
                                @if ($errors->has("status"))
                                    <p class="text-danger">{{ $errors->first("status") }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3 ">Submit</button>
            </div>

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
