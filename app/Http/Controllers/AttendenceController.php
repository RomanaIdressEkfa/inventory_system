<?php

namespace App\Http\Controllers;

use App\Models\Attendence;
use App\Models\Employee;
use Exception;
use Illuminate\Http\Request;

class AttendenceController extends Controller
{
    public function index(){
        $sl = !is_null(\request()->page) ? (\request()->page -1 )* 8 : 0;
        $attendences=Attendence::latest()->paginate(8);
        $employees=Employee::all();
        return view('backend.layouts.Attendence.index',compact('attendences','sl','employees'));
    }

    public function create(){
        $employees=Employee::all();
        return view('backend.layouts.Attendence.create',compact('employees'));
    }


    public function view($id)
    {
        $attendence = Attendence::find($id);
        return view('backend.layouts.Attendence.view', compact('attendence'));
    }

  public function store(Request $request){

        try{
            $data = $request->all();
            Attendence::create($data);
            return redirect()->route('attendence_details_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    public function edit($id)
    {
        $attendence = Attendence::find($id);
        return view('backend.layouts.Attendence.edit', compact('attendence'));
    }

    public function update(Request $request, $id)
    {
        try{
            $data = $request->except('_token');
            Attendence::where('id', $id)->update($data);
            return redirect()->route('attendence_details_index');

        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    public function delete($id)
    {
        $attendence =Attendence::find($id);
        $attendence->delete();
        return redirect()->back();
    }
}
