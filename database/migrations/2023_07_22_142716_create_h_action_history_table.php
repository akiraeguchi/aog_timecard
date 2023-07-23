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
        Schema::create('h_action_history', function (Blueprint $table) {
            $table->id('action_history_id');
            $table->bigInteger('work_time_id');
            $table->dateTime('prev_action_time');
            $table->dateTime('now_action_time');
            $table->integer('action_type');
            $table->integer('operation_staff_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('h_action_history');
    }
};
