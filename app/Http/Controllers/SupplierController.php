<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Exception;
use Illuminate\Http\Request;


class SupplierController extends Controller
{
    public function index(){
        $sl = !is_null(\request()->page) ? (\request()->page -1 )* 8 : 0;
        $suppliers=Supplier::latest()->paginate(8);
        return view('backend.layouts.Suppliers.index',compact('suppliers','sl'));
    }

    public function create(){
        return view('backend.layouts.Suppliers.create');
    }

    public function view($id)
    {
        $supplier = Supplier::find($id);
        return view('backend.layouts.Suppliers.view', compact('supplier'));
    }

  public function store(Request $request){

        try{
            $data = $request->all();
            Supplier::create($data);
            return redirect()->route('supplier_details_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return view('backend.layouts.Suppliers.edit', compact('supplier'));
    }

    public function update(Request $request, $id)
    {
        try{
            $data = $request->except('_token');
            Supplier::where('id', $id)->update($data);
            return redirect()->route('supplier_details_index');

        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    public function delete($id)
    {
        $supplier =Supplier::find($id);
        $supplier->delete();
        return redirect()->back();
    }
}
