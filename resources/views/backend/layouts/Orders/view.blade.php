@extends("backend.layouts.master")
@section("content_page")
    <div class="container border border-light shadow mt-2 rounded p-4">

        <a class="btn btn-primary btn-sm mt-2 mb-4 float-left bi bi-wallet2" href="{{ route("salary_details_index") }}">
            All Salary List
        </a>
        {{-- <a target="_blank" class="btn btn-primary btn-sm mt-2 mb-2 ml-2 float-end bi bi-file-earmark-pdf-fill" href="{{ route("category_details_pdf", $category->id) }}">Export PDF</a> --}}
        <div>
            <h6 class="text-gray-500 mb-5 mt-3" style='font-weight:bold'>VIEW SALARY</h6>

        <h5 style="font-weight: bold">employee_id :</h5>
        <p>{{ $salary->employee_id  ?? "No employee_id  Available" }}</p>

        <h5 style="font-weight: bold">month:</h5>
        <p>{{ $salary->month ?? "No month Available" }}</p>

        <h5 style="font-weight: bold">year:</h5>
        <p>{{ $salary->year ?? "No year Available" }}</p>

        <h5 style="font-weight: bold">salary_amount:</h5>
        <p>{{ $salary->salary_amount ?? "No salary_amount Available" }}</p>

        <h5 style="font-weight: bold">tax_deductions:</h5>
        <p>{{ $salary->tax_deductions ?? "No tax_deductions Available" }}</p>

        <h5 style="font-weight: bold">bonus:</h5>
        <p>{{ $salary->bonus ?? "No bonus Available" }}</p>

        <h5 style="font-weight: bold">overtime_hours:</h5>
        <p>{{ $salary->overtime_hours ?? "No overtime_hours Available" }}</p>


        </div>
    </div>
@endsection
