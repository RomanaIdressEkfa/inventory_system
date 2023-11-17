<?php

namespace App\Http\Controllers;


use App\Models\Employee;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class PdfController extends Controller
{
    public function employees_details_pdf($id)
    {

        $employee = Employee::find($id);

        $pdf = Pdf::loadView('backend.layouts.PDF.employeePDF', compact('employee'));
        return $pdf->stream('employee.pdf');
    }
}
