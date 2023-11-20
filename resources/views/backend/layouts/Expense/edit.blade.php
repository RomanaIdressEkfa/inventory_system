@extends("backend.layouts.master")
@section("content_page")
    <!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rGObF6jz9ATKxIep9tiCxS/Z9fNfexbBH8qO2ms2hJSg9uBoFv06C6uKfr5ccFQ8"
                crossorigin="anonymous">
            <title>Edit Expense</title>
        </head>

        <body>

            <div class="container border border-light shadow mt-2 rounded p-4">
                <h3 class=" text-primary mb-4 text-center" style='font-weight:bold'>EDIT EXPENSE</h3>

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
                <form action="{{ route("expense_details_update", $expense->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" value="{{ $expense->name }}" name="name" placeholder="Enter your name">
                                @if ($errors->has("name"))
                                    <p class="text-danger">{{ $errors->first("name") }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <input type="text" class="form-control" id="category" value="{{ $expense->category }}" name="category" placeholder="Enter your category">
                                @if ($errors->has("category"))
                                    <p class="text-danger">{{ $errors->first("category") }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="payment_method" class="form-label">Payment Method</label>
                                <input type="text" class="form-control" id="payment_method" value="{{ $expense->payment_method }}" name="payment_method" placeholder="Enter your payment method">
                                @if ($errors->has("payment_method"))
                                    <p class="text-danger">{{ $errors->first("payment_method") }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="notes" class="form-label">Notes</label>
                                <input type="text" class="form-control" id="notes" name="notes" value="{{ $expense->notes }}" placeholder="Enter your notes">
                                @if ($errors->has("notes"))
                                    <p class="text-danger">{{ $errors->first("notes") }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="date"="form-label">Expense Date</label>
                                <input type="date" class="form-control" id="expense_date" value="{{ $expense->expense_date }}" name="expense_date" placeholder="Enter your expense date">
                                @if ($errors->has("expense_date"))
                                    <p class="text-danger">{{ $errors->first("expense_date") }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="amount" class="form-label">Amount</label>
                                <input type="number" class="form-control" id="amount" value="{{ $expense->amount }}" name="amount" placeholder="Enter your Amount">
                                @if ($errors->has("amount"))
                                    <p class="text-danger">{{ $errors->first("amount") }}</p>
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

@endsection
