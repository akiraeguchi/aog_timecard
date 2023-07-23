<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::all();
        $today_stamps = WorkTime::staffElual($staffs->staff_id)->get();
        $data = [
            'first_name' => $staffs->first_name,
            'last_name' => $staffs->last_name,
            'today_stamps'
        ];
        return view('staff,index',);
    }
}
