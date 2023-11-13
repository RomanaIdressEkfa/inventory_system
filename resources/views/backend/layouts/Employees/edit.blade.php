@extends("backend.layouts.master")
@section("content_page")
    <!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rGObF6jz9ATKxIep9tiCxS/Z9fNfexbBH8qO2ms2hJSg9uBoFv06C6uKfr5ccFQ8"
                crossorigin="anonymous">
            <title>Edit Employee</title>
        </head>

        <body>

            <div class="container mt-5">
                <h2>Edit Employee Form</h2>

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
                @endif
                <form action="{{ route("employee_details_update", $employee->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}" placeholder="Enter your name">
                        @if ($errors->has("name"))
                            <p class="text-danger">{{ $errors->first("name") }}</p>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $employee->email }}" placeholder="name@example.com">
                        @if ($errors->has("email"))
                            <p class="text-danger">{{ $errors->first("email") }}</p>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone_number" name="phone_number" value="{{ $employee->phone_number }}" placeholder="Enter your phone number">
                        @if ($errors->has("phone_number"))
                            <p class="text-danger">{{ $errors->first("phone_number") }}</p>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" id="address" rows="3" name="address" placeholder="Enter your address">{{ $employee->address }}</textarea>
                        @if ($errors->has("address"))
                            <p class="text-danger">{{ $errors->first("address") }}</p>
                        @endif
                    </div>
                    {{-- current image --}}
                    <div class="mb-3" id='currentImageDiv'>
                        <p>Current Image:</p>
                        <img class="border border-1 rounded" style="width:100px;" src="{{ asset("images/employees/" . $employee->image) }}" alt="{{ $employee->name }}">
                    </div>
                    {{-- uploaded image --}}
                    <div class="mb-3" id='imagePreviewDiv' style='display:none'>
                        <p>Uploaded Image:</p>
                        <img id="imagePreview" class="border border-1 rounded" src="#" alt="Image Preview" style="display: none;width:100px;">
                    </div>
                    <div class="mb-3">
                        <label for="image">Image:</label>
                        <input type="file" name="image" id="image" class="form-control">
                        @if ($errors->has("image"))
                            <p class="text-danger">{{ $errors->first("image") }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="nid" class="form-label">NID Number</label>
                        <input type="number" class="form-control" id="nid" name="nid_no" value="{{ $employee->nid_no }}" placeholder="Enter your NID number">
                        @if ($errors->has("nid_no"))
                            <p class="text-danger">{{ $errors->first("nid_no") }}</p>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="salary" class="form-label">Salary</label>
                        <input type="number" class="form-control" id="salary" name="salary" value="{{ $employee->salary }}" placeholder="Enter your salary">
                        @if ($errors->has("salary"))
                            <p class="text-danger">{{ $errors->first("salary") }}</p>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
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
