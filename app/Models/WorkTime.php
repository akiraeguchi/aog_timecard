<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkTime extends Model
{
    use HasFactory;

    public function scopeStaffElual($query, $staffs)
    {
        return $query -> where('staff_id',$staffs);
    }
}
