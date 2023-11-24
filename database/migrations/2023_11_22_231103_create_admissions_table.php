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
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients');

            $table->unsignedBigInteger('ward_id');
            $table->foreign('ward_id')->references('id')->on('wards');

            $table->date('discharge_date')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};
