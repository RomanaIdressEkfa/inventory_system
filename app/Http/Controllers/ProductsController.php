<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Exception;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

        $sl = !is_null(\request()->page) ? (\request()->page -1 )* 8 : 0;
        $products=Products::latest()->paginate(8);
        $categories=Category::all();
        return view('backend.layouts.Products.index',compact('products','sl','categories'));
    }

    public function create(){
        $categories=Category::all();
        return view('backend.layouts.Products.create',compact('categories'));
    }


    public function view($id)
    {
        $product = Products::find($id);
        return view('backend.layouts.Products.view', compact('product'));
    }

  public function store(Request $request){

        try{
            $data = $request->all();
            Products::create($data);
            return redirect()->route('product_details_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    public function edit($id)
    {
        $product = Products::find($id);
        return view('backend.layouts.Products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        try{
            $data = $request->except('_token');
            Products::where('id', $id)->update($data);
            return redirect()->route('product_details_index');

        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    public function delete($id)
    {
        $product =Products::find($id);
        $product->delete();
        return redirect()->back();
    }

}
