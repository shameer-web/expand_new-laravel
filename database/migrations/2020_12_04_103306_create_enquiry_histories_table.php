<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquiryHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquiry_histories', function (Blueprint $table) {
            $table->id();

            $table->string('staff')->nullable();
            $table->string('customer_name')->nullable(); 
            $table->string('remarks')->nullable();
           
            $table->integer('enquiry_history_status')->default(1);



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
        Schema::dropIfExists('enquiry_histories');
    }
}
