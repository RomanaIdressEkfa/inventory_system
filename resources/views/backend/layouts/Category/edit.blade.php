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

            <div class="container border border-light shadow mt-2 rounded p-4">
                <h3 class=" text-primary mb-4 text-center" style='font-weight:bold'>EDIT EMPLOYEE</h3>
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
                <form action="{{ route("category_details_update", $category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" value="{{ $category->name }}" class="form-control" id="name" name="name" placeholder="Enter your name">
                                @if ($errors->has("name"))
                                    <p class="text-danger">{{ $errors->first("name") }}</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" value="{{ $category->description }}" class="form-control" id="description" name="description" placeholder="Enter your description">
                                @if ($errors->has("description"))
                                    <p class="text-danger">{{ $errors->first("description") }}</p>
                                @endif

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="image_url" class="form-label ">Image_Url:</label>
                                {{-- @if (isset($employee->image) && !empty($employee->image)) --}}
                                <input type="text" value="{{ $category->image_url }}" name="image_url" id="image_url" class="form-control">
                                @if ($errors->has("image_url"))
                                    <p class="text-danger">{{ $errors->first("image_url") }}</p>
                                @endif
                                {{-- @endif --}}

                                    <!-- Check if image_url is not empty -->
                                    @if (!empty(old('image_url')))
                                        <img src="{{ old('image_url') }}" alt="Image Preview" class="img-fluid mt-2" style="max-height: 200px;">
                                    @else
                                        <p class="text-muted mt-2">No image available</p>
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
