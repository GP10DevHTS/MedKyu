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
        Schema::create('insurance_information', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('student_id');
            $table->string('insurance_name');
            $table->string('insurance_number');
            $table->string('insurance_provider');
            $table->string('policy_number');
            $table->text('coverage_details');
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insurance_information');
    }
};
