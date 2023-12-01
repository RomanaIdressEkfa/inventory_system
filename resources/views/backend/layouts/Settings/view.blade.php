@extends("backend.layouts.master")
@section("content_page")
    <div class="container border border-light shadow mt-2 rounded p-4">

        <a class="btn btn-primary btn-sm mt-2 mb-4 float-left bi bi-wallet2" href="{{ route("product_details_index") }}">
            All Salary List
        </a>
        {{-- <a target="_blank" class="btn btn-primary btn-sm mt-2 mb-2 ml-2 float-end bi bi-file-earmark-pdf-fill" href="{{ route("category_details_pdf", $category->id) }}">Export PDF</a> --}}
        <div>
            <h6 class="text-gray-500 mb-5 mt-3" style='font-weight:bold'>VIEW SALARY</h6>

        <h5 style="font-weight: bold">name :</h5>
        <p>{{ $product->name  ?? "No name  Available" }}</p>

        <h5 style="font-weight: bold">quantity:</h5>
        <p>{{ $product->quantity ?? "No quantity Available" }}</p>

        <h5 style="font-weight: bold">price:</h5>
        <p>{{ $product->price ?? "No price Available" }}</p>

        <h5 style="font-weight: bold">description:</h5>
        <p>{{ $product->description ?? "No description Available" }}</p>

        <h5 style="font-weight: bold">image_url:</h5>
        <p>{{ $product->image_url ?? "No image_url Available" }}</p>

        <h5 style="font-weight: bold">manufacturer:</h5>
        <p>{{ $product->manufacturer ?? "No manufacturer Available" }}</p>

        <h5 style="font-weight: bold">expiration_date:</h5>
        <p>{{ $product->expiration_date ?? "No expiration_date Available" }}</p>


        </div>
    </div>
@endsection
