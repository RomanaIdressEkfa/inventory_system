@extends("backend.layouts.master")
@section("content_page")
    <!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rGObF6jz9ATKxIep9tiCxS/Z9fNfexbBH8qO2ms2hJSg9uBoFv06C6uKfr5ccFQ8"
                crossorigin="anonymous">
            <title>Edit Salary</title>
        </head>

        <body>

            <div class="container border border-light shadow mt-2 rounded p-4">
                <h3 class=" text-primary mb-4 text-center" style='font-weight:bold'>EDIT SALARY</h3>
{{--
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (Session::has("msg"))
                    <p class="alert alert-success">{{ Session::get("msg") }}</p>
                @endif --}}
                <form action="{{ route("salary_details_update", $salary->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="month" class="form-label">Month</label>
                                <input type="text" class="form-control" value="{{$salary->month}}" id="month" name="month" placeholder="Enter your month">
                                @if ($errors->has("month"))
                                    <p class="text-danger">{{ $errors->first("month") }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="year" class="form-label">Year</label>
                                <input type="text" class="form-control" id="year" value="{{$salary->year}}" name="year" placeholder="Enter your year">
                                @if ($errors->has("year"))
                                    <p class="text-danger">{{ $errors->first("year") }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="salary_amount" class="form-label">Salary Amount</label>
                                <input type="number" class="form-control" id="salary_amount" value="{{$salary->salary_amount}}" name="salary_amount" placeholder="Enter your salary_amount">
                                @if ($errors->has("salary_amount"))
                                    <p class="text-danger">{{ $errors->first("salary_amount") }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tax_deductions" class="form-label">Tax Deductions</label>
                                <input type="number" class="form-control" id="tax_deductions" value="{{$salary->tax_deductions}}" name="tax_deductions" placeholder="Enter your tax_deductions">
                                @if ($errors->has("tax_deductions"))
                                    <p class="text-danger">{{ $errors->first("tax_deductions") }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="bonus" class="form-label">Bonus</label>
                                <input type="number" class="form-control" id="bonus" name="bonus" value="{{$salary->bonus}}" placeholder="Enter your bonus">
                                @if ($errors->has("bonus"))
                                    <p class="text-danger">{{ $errors->first("bonus") }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="overtime_hours" class="form-label">Overtime Hours</label>
                                <input type="number" class="form-control" id="overtime_hours" name="overtime_hours" value="{{$salary->overtime_hours}}" placeholder="Enter your overtime_hours">
                                @if ($errors->has("overtime_hours"))
                                    <p class="text-danger">{{ $errors->first("overtime_hours") }}</p>
                                @endif
                            </div>
                        </div>

                    </div>

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
                    document.getElementById('currentImageDiv').style.display = 'none';
                };

                reader.readAsDataURL(input.files[0]);
            }
        });
    </script>
@endsection
