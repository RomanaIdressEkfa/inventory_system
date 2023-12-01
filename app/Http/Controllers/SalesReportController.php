<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Products;
use App\Models\Sales_Report;
use Exception;
use Illuminate\Http\Request;

class SalesReportController extends Controller
{
    public function index(){
        $sl = !is_null(\request()->page) ? (\request()->page -1 )* 8 : 0;
        $sales_reports=Sales_Report::latest()->paginate(8);
        $products=Products::all();
        $orders=Order::all();
        return view('backend.layouts.Sales_Report.index',compact('sales_reports','sl','products','orders'));
    }

    public function create(){
        $products=Products::all();
        $orders=Order::all();
        return view('backend.layouts.Sales_Report.create',compact('products','orders'));
    }


    public function view($id)
    {
        $sales_report = Sales_Report::find($id);
        return view('backend.layouts.Sales_Report.view', compact('sales_report'));
    }

  public function store(Request $request){

        try{
            $data = $request->all();
            Sales_Report::create($data);
            return redirect()->route('sales_report_details_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    public function edit($id)
    {
        $sales_report = Sales_Report::find($id);
        return view('backend.layouts.Sales_Report.edit', compact('sales_report'));
    }

    public function update(Request $request, $id)
    {
        try{
            $data = $request->except('_token');
            Sales_Report::where('id', $id)->update($data);
            return redirect()->route('sales_report_details_index');

        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    public function delete($id)
    {
        $sales_report =Sales_Report::find($id);
        $sales_report->delete();
        return redirect()->back();
    }
}
