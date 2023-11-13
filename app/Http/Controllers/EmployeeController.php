<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Exception;
use Session;
use File;

class EmployeeController extends Controller
{
    public function index(){
        $employees=Employee::all();
        return view('backend.layouts.Employees.index',compact('employees'));
    }


    public function create(){
        return view('backend.layouts.Employees.create');
    }


    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            // 'phone_number'=>'required',
            'phone_number' => 'nullable|max:20',
            'address'=>'required',
            // 'image'=>'required|mimes:png,jpg,jpeg',
            'nid_no'=>'required',
            'salary'=>'required',

        ]);
        $imageName='';
        if($image=$request->file('image')){
            $imageName=time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/employees',$imageName);
        }

         Employee::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'address'=>$request->address,
            'image'=>$imageName,
            'nid_no'=>$request->nid_no,
            'salary'=>$request->salary,

        ]);
        session()->flash('message', 'Post successfully updated.');
        return redirect()->route('employee_details_index');

    }


    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('backend.layouts.Employees.edit', compact('employee'));
    }


    public function update(Request $request, $id)
    {
        $employee= Employee::findOrFail($id);
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            // 'phone_number'=>'required',
            'phone_number' => 'nullable|max:20',

            'address'=>'required',
            // 'image'=>'required|mimes:png,jpg,jpeg',
            'nid_no'=>'required',
            'salary'=>'required',
        ]);
        $imageName='';
        $deleteOldImage= 'images/employees/'.$employee->image;

        if($image=$request->file('image')){
            if(file_exists($deleteOldImage)){
                File::delete($deleteOldImage);
            }
            else{
                $imageName=$employee->image;
            }
            $imageName=time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/employees',$imageName);
        }

        Employee::where('id', $id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'address'=>$request->address,
            'image'=>$imageName,
            'nid_no'=>$request->nid_no,
            'salary'=>$request->salary,
        ]);
        session()->flash('message', 'Post successfully updated.');
        return redirect()->route('employee_details_index');

    }


    public function delete($id)
    {
        $employees =Employee::find($id);
        $employees->delete();
        return redirect()->back();
    }
}
