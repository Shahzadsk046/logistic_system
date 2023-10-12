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
        Schema::create('vehicle_other_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id')->constrained('vehicles')->onDelete('cascade');
            $table->float('length');
            $table->float('height');
            $table->float('width');
            $table->string('dimension_in');
            $table->boolean('is_available');
            $table->boolean('lift_gage');
            $table->boolean('hazmat');
            $table->boolean('icc_bar');
            $table->boolean('tsa');
            $table->boolean('twic');
            $table->boolean('pallet_jack');
            $table->boolean('true_dock_high');
            $table->boolean('tanker_endorsement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_other_details');
    }
};
