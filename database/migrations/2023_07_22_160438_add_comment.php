<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('m_staff', function (Blueprint $table) {
            $table->integer('staff_type')->comment('1:管理者,2:共通,3:一般')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('m_staff', function (Blueprint $table) {
            $table->integer('staff_type')->comment()->change();
        });
    }
};
