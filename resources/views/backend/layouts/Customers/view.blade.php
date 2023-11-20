@extends("backend.layouts.master")
@section("content_page")
    <div class="container border border-light shadow mt-2 rounded p-4">

        <a class="btn btn-primary btn-sm mt-2 mb-4 float-left bi bi-wallet2" href="{{ route("customer_details_index") }}">
            All Customer List
        </a>
        <div>
            <h6 class="text-gray-500 mb-5 mt-3" style='font-weight:bold'>VIEW CUSTOMER</h6>

        <h5 style="font-weight: bold">Name:</h5>
        <p>{{ $customer->name ?? "No Name Available" }}</p>

        <h5 style="font-weight: bold">Email:</h5>
        <p>{{ $customer->email ?? "No Email Available" }}</p>

        <h5 style="font-weight: bold">Address:</h5>
        <p>{{ $customer->address ?? "No Address Available" }}</p>

        <h5 style="font-weight: bold">Phone Number:</h5>
        <p> {{ $customer->phone_number ?? "No Phone Number Available" }}</p>

        <h5 style="font-weight: bold">Loyalty Points</h5>
        <p>{{ $customer->loyalty_points ?? "No Loyalty Points Available" }}</p>

        </div>
    </div>
@endsection
