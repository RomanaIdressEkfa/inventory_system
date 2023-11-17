<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Mpdf\Mpdf;

use Illuminate\Http\Request;

class PdfController extends Controller
{

public function employees_details_pdf($id)
{
$employees = Employee::find($id);
$mpdf = new \Mpdf\Mpdf();
// $mpdf->showWatermarkText = true;
// $mpdf->SetWatermarkText('PHP with Laravel Framework');
$html = view('backend.layouts.PDF.employeePDF', compact('employees'))->render();
$mpdf->WriteHTML($html);
$mpdf->Output('Employee_details.pdf','I');
}
}
