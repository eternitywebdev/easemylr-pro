<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('regn_no')->nullable();
            $table->string('mfg')->nullable();
            $table->string('make')->nullable();
            $table->string('engine_no')->nullable();
            $table->string('chassis_no')->nullable();
            $table->string('gross_vehicle_weight')->nullable();
            $table->string('unladen_weight')->nullable();
            $table->string('tonnage_capacity')->nullable();
            $table->string('body_type')->nullable();
            $table->string('state_id')->nullable();
            $table->string('regndate')->nullable();
            $table->string('hypothecation')->nullable();
            $table->string('driver_id')->nullable();
            $table->string('ownership')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('owner_phone')->nullable();
            $table->string('rc_image')->nullable();
            $table->tinyinteger('status')->default(1)->comment('0=>not active 1=>active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
