<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\M_Staff;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = M_Staff::all();
        return view('staff.index')->with('staffs',$staffs);
        die;
        $today_stamps = WorkTime::staffElual($staffs->staff_id)->get();
        $data = [
            'first_name' => $staffs->first_name,
            'last_name' => $staffs->last_name,
            'today_stamps'
        ];
    }
}
