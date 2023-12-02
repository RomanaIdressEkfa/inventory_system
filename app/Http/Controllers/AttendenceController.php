<?php

namespace App\Http\Controllers;

use App\Models\Attendence;
use App\Models\Employee;
use Exception;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AttendenceController extends Controller
{
    public function index(){
        $sl = !is_null(\request()->page) ? (\request()->page -1 )* 8 : 0;
        $attendences=Attendence::latest()->paginate(8);
        $date = Carbon::createFromDate(2023, 11, 25, 'Asia/Dhaka');
        $employees=Employee::all();
        return view('backend.layouts.Attendence.index',compact('attendences','sl','employees','date'));
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
        // $attendence=Attendence::find($id);
        // if($attendence){
        //     if($attendence->staus){
        //         $attendence->staus=0;
        //     }
        //     else{
        //         $attendence->staus=1;
        //     }
        //     $attendence->save();
        // }
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

    public function active($id)
    {
        Attendence::where('id', $id)->first()->update([
            'status' => 1,
        ]);
        return redirect()->back();
    }

    public function inactive($id)
    {
        $attendence = Attendence::where('id', $id)->first()->update([
            'status' => 0,
        ]);
        return redirect()->back();
    }
}
