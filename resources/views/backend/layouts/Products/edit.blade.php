@extends("backend.layouts.master")
@section("content_page")
    <!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rGObF6jz9ATKxIep9tiCxS/Z9fNfexbBH8qO2ms2hJSg9uBoFv06C6uKfr5ccFQ8"
                crossorigin="anonymous">
            <title>Edit Order</title>
        </head>

        <body>

            <div class="container border border-light shadow mt-2 rounded p-4">
                <h3 class=" text-primary mb-4 text-center" style='font-weight:bold'>EDIT ORDER</h3>
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
                <form action="{{ route("order_details_update", $order->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="order_date" class="form-label">Order_date</label>
                                <input type="date" class="form-control" value="{{$order->order_date}}" id="order_date" name="order_date" placeholder="Enter your order_date">
                                @if ($errors->has("order_date"))
                                    <p class="text-danger">{{ $errors->first("order_date") }}</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="total_amount" class="form-label">Total_amount</label>
                                <input type="number" class="form-control" value="{{$order->total_amount}}"  id="total_amount" name="total_amount" placeholder="Enter your total_amount">
                                @if ($errors->has("total_amount"))
                                    <p class="text-danger">{{ $errors->first("total_amount") }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="status" class="form-label">Status </label>
                                <input type="text" class="form-control" value="{{$order->status}}"  id="status " name="status " placeholder="Enter your status ">
                                @if ($errors->has("status "))
                                    <p class="text-danger">{{ $errors->first("status ") }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="payment_method" class="form-label">payment_method</label>
                                <input type="text" class="form-control" value="{{$order->payment_method}}"  id="payment_method" name="payment_method" placeholder="Enter your payment_method">
                                @if ($errors->has("payment_method"))
                                    <p class="text-danger">{{ $errors->first("payment_method") }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="shipping_address" class="form-label">Shipping_address</label>
                                <input type="text" class="form-control" value="{{$order->shipping_address}}"  id="shipping_address" name="shipping_address" placeholder="Enter your shipping_address">
                                @if ($errors->has("shipping_address"))
                                    <p class="text-danger">{{ $errors->first("shipping_address") }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="delivery_date" class="form-label">Delivery_date</label>
                                <input type="date" class="form-control" value="{{$order->delivery_date}}"  id="delivery_date" name="delivery_date" placeholder="Enter your delivery_date">
                                @if ($errors->has("delivery_date"))
                                    <p class="text-danger">{{ $errors->first("delivery_date") }}</p>
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
