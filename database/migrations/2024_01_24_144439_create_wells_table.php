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
        Schema::create('wells', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('location');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')
                ->references('id')
                ->on('clients')
                ->onUpdate('cascade');
            $table->string('type');
            $table->string('oilfield');
            $table->string('battery')->nullable();
            $table->string('water')->nullable();
            $table->string('oil')->nullable();
            $table->string('gas')->nullable();
            $table->string('water_density')->nullable();
            $table->string('oil_density')->nullable();
            $table->string('gas_gravity')->nullable();
            $table->string('viscosity')->nullable();
            $table->string('co2')->nullable();
            $table->string('n2')->nullable();
            $table->string('h2s')->nullable();
            $table->string('c1')->nullable();
            $table->string('c2')->nullable();
            $table->string('c3')->nullable();
            $table->string('ic4')->nullable();
            $table->string('ic5')->nullable();
            $table->string('nc')->nullable();
            $table->string('c6')->nullable();
            $table->string('surface_temp')->nullable();
            $table->string('bottom_temp')->nullable();
            $table->string('average_joint')->nullable();
            $table->string('pump_depth')->nullable();
            $table->string('plugback')->nullable();
            $table->string('seating_nipple')->nullable();
            $table->string('tubing_anchor')->nullable();
            $table->string('rod_diameter')->nullable();
            $table->string('rod_length')->nullable();
            $table->string('manufacturer_unit')->nullable();
            $table->string('api_unit')->nullable();
            $table->string('motor_type')->nullable();
            $table->string('motor_power')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wells');
    }
};
