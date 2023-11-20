@extends("backend.layouts.master")
@section("content_page")
    <div class="container border border-light shadow mt-2 rounded p-4">

        <a class="btn btn-primary btn-sm mt-2 mb-4 float-left bi bi-wallet2" href="{{ route("expense_details_index") }}">
            All Expense List
        </a>
        <div>
            <h6 class="text-gray-500 mb-5 mt-3" style='font-weight:bold'>VIEW EXPENSE</h6>

        <h5 style="font-weight: bold">Name:</h5>
        <p>{{ $expense->name ?? "No Name Available" }}</p>

        <h5 style="font-weight: bold">Amount:</h5>
        <p>{{ $expense->amount ?? "No amount Available" }}</p>

        <h5 style="font-weight: bold">Expense Date:</h5>
        <p>{{ $expense->expense_date ?? "No expense date Available" }}</p>

        <h5 style="font-weight: bold">Category:</h5>
        <p> {{ $expense->category ?? "No category Available" }}</p>

        <h5 style="font-weight: bold">Payment Method:</h5>
        <p>{{ $expense->payment_method ?? "No Payment Method Available" }}</p>

        <h5 style="font-weight: bold">Notes:</h5>
        <p>{{ $expense->notes ?? "No Notes Available" }}</p>

        </div>
    </div>
@endsection
