<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivationDeactivationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activation_deactivations', function (Blueprint $table) {
            $table->id();

            
            $table->string('customer_name')->nullable();
            $table->string('staff')->nullable(); 
            $table->mediumText('complaint')->nullable();
            $table->string('type')->nullable();
            $table->string('other_complaint')->nullable();

            $table->string('active_deactive')->nullable();
            $table->string('active_deactive_date')->nullable();
            $table->string('payment_due')->nullable();
            $table->string('customer_request')->nullable();
            $table->integer('status')->default(0);
            $table->integer('activation_deactivation_status')->default(1);


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
        Schema::dropIfExists('activation_deactivations');
    }
}
