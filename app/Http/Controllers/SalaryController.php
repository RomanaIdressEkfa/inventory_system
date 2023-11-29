<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Salary;
use Exception;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function index(){

        $sl = !is_null(\request()->page) ? (\request()->page -1 )* 8 : 0;
        $salaries=Salary::latest()->paginate(8);
        $employees=Employee::all();
        return view('backend.layouts.Salary.index',compact('salaries','sl','employees'));
    }

    public function create(){
        $employees=Employee::all();
        return view('backend.layouts.Salary.create' ,compact('employees'));
    }


    public function view($id)
    {
        $salary = Salary::find($id);
        return view('backend.layouts.Salary.view', compact('salary'));
    }

  public function store(Request $request){

        try{
            $data = $request->all();
            Salary::create($data);
            return redirect()->route('salary_details_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    public function edit($id)
    {
        $salary = Salary::find($id);
        return view('backend.layouts.Salary.edit', compact('salary'));
    }

    public function update(Request $request, $id)
    {
        try{
            $data = $request->except('_token');
            Salary::where('id', $id)->update($data);
            return redirect()->route('salary_details_index');

        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    public function delete($id)
    {
        $salary =Salary::find($id);
        $salary->delete();
        return redirect()->back();
    }

}
