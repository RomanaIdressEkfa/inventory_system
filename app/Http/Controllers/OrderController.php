<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use Exception;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){

        $sl = !is_null(\request()->page) ? (\request()->page -1 )* 8 : 0;
        $orders=Order::latest()->paginate(8);
        $customers=Customer::all();
        return view('backend.layouts.Orders.index',compact('orders','sl','customers'));
    }

    public function create(){
        $customers=Customer::all();
        return view('backend.layouts.Orders.create',compact('customers'));
    }


    public function view($id)
    {
        $order = Order::find($id);
        return view('backend.layouts.Orders.view', compact('order'));
    }

  public function store(Request $request){

        try{
            $data = $request->all();
            Order::create($data);
            return redirect()->route('order_details_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    public function edit($id)
    {
        $order = Order::find($id);
        return view('backend.layouts.Orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        try{
            $data = $request->except('_token');
            Order::where('id', $id)->update($data);
            return redirect()->route('order_details_index');

        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    public function delete($id)
    {
        $order =Order::find($id);
        $order->delete();
        return redirect()->back();
    }
}
