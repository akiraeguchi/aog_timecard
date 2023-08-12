<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\ScopeStaff;
use App\Models\WorkTime;

class M_Staff extends Model
{
    use HasFactory;

    public function staffs(){
        return $this->hasMany(WorkTime::class);
    }

    //グローバルスコープを呼び出し
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new ScopeStaff);
    }

    protected $table = "M_staff";
}