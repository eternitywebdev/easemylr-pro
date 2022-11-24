<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsignmentItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consignment_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('consignment_id')->nullable();
            $table->string('description')->nullable();
            $table->string('packing_type')->nullable();
            $table->string('quantity')->nullable();
            $table->string('weight')->nullable();
            $table->string('gross_weight')->nullable();
            $table->string('freight')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('consignment_items');
    }
}
