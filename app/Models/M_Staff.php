<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\ScopeStaff;
use App\Models\T_Work_Time;

class M_Staff extends Model
{
    use HasFactory;

    public function worktimes()
    {
        return $this->hasMany('App\Models\T_Work_Time','staff_id','staff_id');
    }

    //グローバルスコープを呼び出し
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new ScopeStaff);
    }

    protected $table = "M_staff";
    protected $primaryKey = 'staff_id';
}
