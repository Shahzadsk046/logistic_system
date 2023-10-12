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
        Schema::create('driver_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('driver_id');
            $table->unsignedBigInteger('license_id');
            $table->unsignedBigInteger('insurance_id');
            $table->boolean('is_truck_alloted');
            $table->unsignedBigInteger('vehicle_id')->nullable();
            $table->timestamps();

            $table->foreign('driver_id')->references('id')->on('drivers')->onDelete('cascade');
            $table->foreign('license_id')->references('id')->on('driver_license_details')->onDelete('cascade');
            $table->foreign('insurance_id')->references('id')->on('driver_insurance_details')->onDelete('cascade');
            $table->foreign('vehicle_id')->references('id')->on('trucks')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_details');
    }
};
