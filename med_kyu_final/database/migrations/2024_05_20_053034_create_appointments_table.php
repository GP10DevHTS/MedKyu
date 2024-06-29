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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained(); 
            $table->foreignId('doctor_id')->nullable()->default(null)->constrained();
            $table->foreignId('department_id')->nullable()->default(null)->constrained();
            $table->timestamp('start_time')->nullable();
            $table->integer('status')->default(0)->comment('0 - Pending, 1 - Confirmed, 2 - Cancelled');
            $table->string('reason')->nullable();
            $table->string('cancel_reason')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
