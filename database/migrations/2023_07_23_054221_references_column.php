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
        Schema::table('h_action_history', function (Blueprint $table) {
            $table->bigInteger('work_time_id')->unsigned()->change();
            $table->foreign('work_time_id')->references('work_time_id')->on('t_work_time')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('h_action_history', function (Blueprint $table) {
            //
        });
    }
};
