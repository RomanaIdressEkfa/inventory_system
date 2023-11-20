<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $sl = !is_null(\request()->page) ? (\request()->page -1 )* 8 : 0;
        $employees = Employee::latest()->paginate(8);
        return view('backend.layouts.Employees.index', compact('employees','sl'));
    }


    public function create()
    {
        return view('backend.layouts.Employees.create');
    }


    public function view($id)
    {
        $employee = Employee::find($id);
        return view('backend.layouts.Employees.view', compact('employee'));
    }


    public function store(StoreEmployeeRequest $request)
    {

        try {
            $data= $request->all();
            if($request->image){
                $imageName = '';
                // upload image
                $imageName = Upload::uploadImage($request->image, 'images/employees');
                $data["image"]=$imageName;
            }
            Employee::create($data);
            toastr()->success('Employee has been created successfully!', 'Congrats');
            return redirect()->route('employee_details_index');
        } catch (Exception $e) {
            toastr()->error('Something went wrong!', 'Alert');
        }
    }


    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('backend.layouts.Employees.edit', compact('employee'));
    }


    public function update(UpdateEmployeeRequest $request, $id)
    {
        try {
            $employee = Employee::findOrFail($id);
            $imageName = '';
            $deleteOldImage = 'images/employees/' . $employee->image;

            if ($image = $request->file('image')) {
                if (file_exists($deleteOldImage)) {
                    File::delete($deleteOldImage);
                } else {
                    $imageName = $employee->image;
                }
                //update image
                $imageName = Upload::uploadImage($request->image, 'images/employees');
            }

            $employee->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'image' => $imageName,
                'position' => $request->position,
                'department' => $request->department,
                'date_of_birth' => $request->date_of_birth,
                'hire_date' => $request->hire_date,
                'nid_no' => $request->nid_no,
                'salary' => $request->salary,
            ]);
            toastr()->success('Employee has been updated successfully!', 'Congrats');
            return redirect()->route('employee_details_index');
        } catch (Exception $e) {
            toastr()->error('Something went wrong!', 'Alert');
        }
    }


    public function delete($id)
    {
        $employee = Employee::find($id);
        $deleteOldImage = 'images/employees/' . $employee->image;
        File::delete($deleteOldImage);
        $employee->delete();
        return redirect()->back();
    }
}
