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
        Schema::create('lab_tests', function (Blueprint $table) {
            $table->id();
            $table->string('test_name');
            $table->string('sample_type');
            $table->decimal('result_value', 8, 2);
            $table->decimal('reference_range')->nullable();
            $table->string('interpretation')->nullable();
            $table->date('test_date');
            $table->timestamps();

            $table->foreignId('doctor_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('patient_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_tests');
    }
};
