<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Exception;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index(){
        $sl = !is_null(\request()->page) ? (\request()->page -1 )* 8 : 0;
        $expenses=Expense::latest()->paginate(5);
        return view('backend.layouts.Expense.index',compact('expenses','sl'));
    }

    public function create(){
        return view('backend.layouts.Expense.create');
    }

    public function view($id)
    {
        $expense = Expense::find($id);
        return view('backend.layouts.Expense.view', compact('expense'));
    }

  public function store(Request $request){

        try{
            $data = $request->all();
            Expense::create($data);
            return redirect()->route('expense_details_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    public function edit($id)
    {
        $expense = Expense::find($id);
        return view('backend.layouts.Expense.edit', compact('expense'));
    }

    public function update(Request $request, $id)
    {
        try{
            $data = $request->except('_token');
            Expense::where('id', $id)->update($data);
            return redirect()->route('expense_details_index');

        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    public function delete($id)
    {
        $expense =Expense::find($id);
        $expense->delete();
        return redirect()->back();
    }
}
