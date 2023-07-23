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
        Schema::table('t_work_time', function (Blueprint $table) {
            $table->foreign('staff_id')->references('staff_id')->on('m_staff')->onDelete('cascade');
            $table->integer('action_type')->comment('1:出勤,2:退勤')->change();
            $table->integer('action_status')->comment('1:打刻,2:申請中,3:承認済')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_work_time', function (Blueprint $table) {
            $table->integer('action_type')->comment()->change();
            $table->integer('action_status')->comment()->change();
        });
    }
};
