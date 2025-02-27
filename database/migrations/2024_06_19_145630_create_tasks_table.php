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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            
            $table->string('task_name');
            $table->string('project_name');
            $table->date('start_date');
            $table->time("start_time")->nullable();
            $table->date('end_date');

            $table->time("end_time")->nullable();
   
            $table->boolean('status')->default(0);
            $table->unsignedBigInteger('user_id')->nullable(); 

        $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
