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
        Schema::create('patient_lab_tests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clinical_record_id')->constrained();
            $table->foreignId('lab_test_id')->constrained();
            $table->string('result')->nullable();
            $table->timestamp('test_date')->nullable();
            $table->foreignId('done_by')->nullable()->default(null)->constrained('users');
            $table->foreignId('created_by')->constrained('users');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_lab_tests');
    }
};
