<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Exception;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index(){
        $sl = !is_null(\request()->page) ? (\request()->page -1 )* 8 : 0;
        $settings=Settings::latest()->paginate(8);
        return view('backend.layouts.Settings.index',compact('settings','sl'));
    }

    public function create(){
        return view('backend.layouts.Settings.create');
    }


    public function view($id)
    {
        $setting = Settings::find($id);
        return view('backend.layouts.Settings.view', compact('setting'));
    }

  public function store(Request $request){

        try{
            $data = $request->all();
            Settings::create($data);
            return redirect()->route('settings_details_index');
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    public function edit($id)
    {
        $setting = Settings::find($id);
        return view('backend.layouts.Settings.edit', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        try{
            $data = $request->except('_token');
            Settings::where('id', $id)->update($data);
            return redirect()->route('settings_details_index');

        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    public function delete($id)
    {
        $setting =Settings::find($id);
        $setting->delete();
        return redirect()->back();
    }
}
