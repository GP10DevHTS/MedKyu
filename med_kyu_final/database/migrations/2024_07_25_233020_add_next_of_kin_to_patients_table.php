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
        Schema::table('patients', function (Blueprint $table) {
            $table->string('nok_name')->nullable()->default(null)->comment('next_of_kin_name');
            $table->string('nok_phone')->nullable()->default(null)->comment('next_of_kin_phone');
            $table->string('nok_email')->nullable()->default(null)->comment('next_of_kin_email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn('nok_name');
            $table->dropColumn('nok_phone');
            $table->dropColumn('nok_email');
        });
    }
};
