<?php

namespace App\Http\Controllers;



class BackendController extends Controller
{
    public function admin()
    {
        return view("backend.layouts.Dashboard.index");
    }
}
