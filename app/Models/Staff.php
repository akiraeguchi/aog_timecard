<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\ScopeStaff;

class Staff extends Model
{
    use HasFactory;
    //グローバルスコープを呼び出し
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new ScopeStaff);
    }
}
