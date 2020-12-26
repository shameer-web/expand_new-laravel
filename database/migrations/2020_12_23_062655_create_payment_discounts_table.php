<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_discounts', function (Blueprint $table) {
            $table->id();

             $table->string('package_name');
            $table->string('package_amount');
            $table->string('package_total_amount');
            $table->integer('cus_id');
            $table->integer('customer_package_status')->default(1);
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
        Schema::dropIfExists('payment_discounts');
    }
}
