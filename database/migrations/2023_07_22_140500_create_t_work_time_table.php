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
        Schema::create('t_work_time', function (Blueprint $table) {
            $table->id('work_time_id');
            $table->integer('staff_id');
            $table->datetime('action_time');
            $table->integer('action_type');
            $table->integer('action_status');
            $table->string('extra','1024');
            $table->tinyInteger('deleted_flg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_work_time');
    }
};
