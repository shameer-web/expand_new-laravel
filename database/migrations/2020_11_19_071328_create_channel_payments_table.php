<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChannelPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channel_payments', function (Blueprint $table) {
            $table->id();
            


            $table->integer('cus_id')->nallable();
            $table->string('channel_name')->nallable();
            $table->string('transaction_type')->nallable();
            $table->string('channel_amount')->nallable();
            $table->string('channel_total_amount')->nallable();
            $table->string('due_amount')->nallable();
            $table->string('balance')->nallable();
            $table->string('total_channel_amount')->nallable();
            $table->string('customer_paid_amount')->nallable();
            $table->string('gst_number')->nallable();
            $table->string('payment_date')->nallable();
            $table->integer('delete_status')->default(1);
           
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
        Schema::dropIfExists('channel_payments');
    }
}
