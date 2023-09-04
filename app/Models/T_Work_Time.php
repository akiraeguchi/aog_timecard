<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_Work_Time extends Model
{
    use HasFactory;

    public function scopeStaffEqual($query, $staffs)
    {
        return $query->where('staff_id', $staffs);
    }

    public function staff()
    {
        return $this->belongsTo('App\Models\M_staff','staff_id','staff_id');
    }

    protected $table = "T_Work_Time";
    protected $primaryKey = 'work_time_id';
}
