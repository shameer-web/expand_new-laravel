<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('sub_code');
            $table->string('area');
            $table->integer('customer_id');
            $table->integer('crf_no');
            $table->integer('kseb_post_no');
            $table->string('installation_address');
            $table->string('district');
            $table->integer('pin_code');
            $table->string('communication_address');
            $table->string('district1');
            $table->integer('pin_code1');
            $table->string('customer_type');
            $table->string('id_proof_type');
            $table->integer('id_proof_number');
            $table->string('phone');
            $table->string('mobile_number');
            $table->string('email')->unique();
            $table->string('join_date');
            $table->string('remark');
            $table->string('date');

            $table->integer('customer_status')->default(1);
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
        Schema::dropIfExists('customers');
    }
}
