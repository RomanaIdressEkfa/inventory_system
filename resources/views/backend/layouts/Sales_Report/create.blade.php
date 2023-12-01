@extends("backend.layouts.master")
@section("content_page")
    <!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rGObF6jz9ATKxIep9tiCxS/Z9fNfexbBH8qO2ms2hJSg9uBoFv06C6uKfr5ccFQ8"
                crossorigin="anonymous">
            <title>Add Sales Report</title>
        </head>

        <body>

            <div class="container border border-light shadow p-4 rounded">
                <h3 class=" text-primary mb-4 text-center" style='font-weight:bold'>ADD SALES REPORT</h3>
                <form action="{{ route("sales_report_details_store") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example" name="product_id">
                                    <option selected>PRODUCT ID:</option>
                                   @foreach ($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->id }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example" name="order_id">
                                    <option selected>ORDER ID:</option>
                                    @foreach ($orders as $order)
                                        <option value="{{ $order->id }}">{{ $order->id }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="quantity_sold" class="form-label">quantity_sold</label>
                                <input type="number" class="form-control" id="quantity_sold" name="quantity_sold" placeholder="Enter your quantity_sold">
                                @if ($errors->has("quantity_sold"))
                                    <p class="text-danger">{{ $errors->first("quantity_sold") }}</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="total_amount" class="form-label">total_amount</label>
                                <input type="number" class="form-control" id="total_amount" name="total_amount" placeholder="Enter your total_amount">
                                @if ($errors->has("total_amount"))
                                    <p class="text-danger">{{ $errors->first("total_amount") }}</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="profit_margin" class="form-label">profit_margin</label>
                                <input type="number" class="form-control" id="profit_margin" name="profit_margin" placeholder="Enter your profit_margin">
                                @if ($errors->has("profit_margin"))
                                    <p class="text-danger">{{ $errors->first("profit_margin") }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="discount_amount" class="form-label">discount_amount</label>
                                <input type="number" class="form-control" id="discount_amount" name="discount_amount" placeholder="Enter your discount_amount">
                                @if ($errors->has("discount_amount"))
                                    <p class="text-danger">{{ $errors->first("discount_amount") }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="sale_date" class="form-label">sale_date</label>
                                <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Enter your sale_date">
                                @if ($errors->has("sale_date"))
                                    <p class="text-danger">{{ $errors->first("sale_date") }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="taxes" class="form-label">taxes</label>
                                <input type="number" class="form-control" id="taxes" name="taxes" placeholder="Enter your taxes">
                                @if ($errors->has("taxes"))
                                    <p class="text-danger">{{ $errors->first("taxes") }}</p>
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
