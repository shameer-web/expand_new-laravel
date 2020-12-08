<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_channels', function (Blueprint $table) {
            $table->id();



            $table->string('channel_name');
            $table->string('channel_amount')->nullable();
            $table->string('channel_total_amount')->nullable();
            $table->integer('cus_id');
            $table->integer('channel_status')->default(0);
            $table->integer('payment_status')->default(0);
            $table->string('transaction_type')->nullable();
            $table->string('customer_paid_amount')->nullable();
            $table->string('balance')->default(0);

            $table->string('gst_number')->nullable();
            $table->string('payment_date')->nullable();


    
            $table->integer('customer_channel_status')->default(1);



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
        Schema::dropIfExists('customer_channels');
    }
}
