<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
             $table->string('device');
             $table->string('type');
            $table->integer('device_id');
            $table->integer('serial_number');
            $table->string('model');
            $table->string('district');
            $table->integer('lco_id');
             $table->integer('device_status')->default(1);
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
        Schema::dropIfExists('devices');
    }
}
