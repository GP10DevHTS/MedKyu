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
        Schema::create('patient_treatments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clinical_record_id')->constrained();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('type')->nullable(); // e.g., medication, procedure, therapy
            $table->string('dosage')->nullable(); 
            $table->string('frequency')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->string('duration')->nullable(); // eg. 4 weeks, 1 month, 2 years
            $table->foreignId('prescribed_by')->nullable()->default(null)->constrained('doctors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_treatments');
    }
};
