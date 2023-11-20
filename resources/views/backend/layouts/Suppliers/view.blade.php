@extends("backend.layouts.master")
@section("content_page")
    <div class="container border border-light shadow mt-2 rounded p-4">

        <a class="btn btn-primary btn-sm mt-2 mb-4 float-left bi bi-wallet2" href="{{ route("supplier_details_index") }}">
            All Supplier List
        </a>
        <div>
            <h6 class="text-gray-500 mb-5 mt-3" style='font-weight:bold'>VIEW SUPPLIER</h6>

        <h5 style="font-weight: bold">Name:</h5>
        <p>{{ $supplier->name ?? "No Name Available" }}</p>

        <h5 style="font-weight: bold">Email:</h5>
        <p>{{ $supplier->email ?? "No Email Available" }}</p>

        <h5 style="font-weight: bold">Address:</h5>
        <p>{{ $supplier->address ?? "No Address Available" }}</p>

        <h5 style="font-weight: bold">Phone Number:</h5>
        <p> {{ $supplier->phone_number ?? "No Phone Number Available" }}</p>

        <h5 style="font-weight: bold">Contact Person</h5>
        <p>{{ $supplier->contact_person ?? "No Contact Person Available" }}</p>

        <h5 style="font-weight: bold">Payment Terms</h5>
        <p>{{ $supplier->payment_terms ?? "No Payment Terms Available" }}</p>

        <h5 style="font-weight: bold">Account Balance</h5>
        <p>{{ $supplier->account_balance ?? "No Account Balance Available" }}</p>

        </div>
    </div>
@endsection
