<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channels', function (Blueprint $table) {
            $table->id();

            $table->string('channel_name');
            $table->string('channel_type');
            $table->string('channel_duration')->nullable();
            $table->integer('channel_price');
            $table->string('cgst')->nullable();
            $table->string('sgst')->nullable();
            $table->string('cess')->nullable();
            $table->string('total_tax')->nullable();
            $table->integer('gst');
            $table->integer('channel_amount');
            $table->integer('total_amount');
            $table->integer('channel_status')->default(1);


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
        Schema::dropIfExists('channels');
    }
}
