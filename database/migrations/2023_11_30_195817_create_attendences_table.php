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
        Schema::create('attendences', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('employee_id');
            $table->foreignId('employee_id')->constrained('employees')->cascadeOnDelete();
            $table->date('attendance_date')->default(date("Y-m-d"));;
            $table->boolean('status')->default(1);// Assuming 'status' is a string field for present, absent, late, etc.
            $table->time('clock_in_time')->default(date("H:i:s")); // Assuming 'clock_in_time' and 'clock_out_time' are time fields and can be nullable
            $table->time('clock_out_time')->default(date("H:i:s"));
            $table->decimal('overtime_hours', 5, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendences');
    }
};
