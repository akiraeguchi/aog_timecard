<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\M_Staff;
use App\Models\T_Work_Time;
use App\Scopes\ScopeStaff;

class StaffController extends Controller
{
    public function index()
    {
        $day = date('m月d日');
        $week = array('日', '月', '火', '水', '木', '金', '土');
        $w = date('w');
        $dow = $week[$w];
        $time = date('A H:i');
        $staffs = M_staff::with(
            ['worktimes' => function ($TodayWorkTime) {
                $today_s = date('Y-m-d 00:00');
                $today_e = date('Y-m-d 00:00', strtotime('tomorrow'));
                $TodayWorkTime->whereBetween('action_time', [$today_s, $today_e])->get();
            }]
        )->get();

        return view('staff.index', compact('staffs', 'day', 'dow', 'time'));

    }
}
