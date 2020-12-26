<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaint_histories', function (Blueprint $table) {
            $table->id();

            $table->integer('complaint_id')->nullable();
            $table->string('staff')->nullable();
            $table->string('customer_id')->nullable();
             $table->string('customer_name')->nullable(); 
            $table->string('remarks')->nullable();
           
            $table->integer('complaint_history_status')->default(1);


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
        Schema::dropIfExists('complaint_histories');
    }
}
