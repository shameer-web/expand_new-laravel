<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
             $table->string('complaint_id');
             $table->string('customer_name');
             $table->string('phone_no');
             $table->string('email');
             $table->string('staff');
             $table->string('post_no');
            $table->mediumText('complaint');
            $table->string('other_complaint');
            $table->string('assigned')->nullable();
            $table->string('remarks')->nullable();

              $table->integer('status')->default(0);
             $table->integer('complaint_status')->default(1);
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
        Schema::dropIfExists('complaints');
    }
}
