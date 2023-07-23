<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkTimeController extends Controller
{
    public function index(){
        return view('work_time.index');
    }

    public function edit(){
        return view('work_time.edit');
    }
}
