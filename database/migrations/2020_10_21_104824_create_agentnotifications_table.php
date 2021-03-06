<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentnotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agentnotifications', function (Blueprint $table) {
            $table->id();
             $table->integer('cust_id');
             $table->string('agent_name');
             $table->string('name');
             $table->string('sub_code');
             $table->string('area');
             $table->string('crf_no');
             $table->string('kseb_post_no');
             $table->string('installation_address');
             $table->string('district');
             $table->string('pin_code');
             $table->string('communication_address');
             $table->string('district1');
             $table->string('pin_code1');
             $table->string('customer_type');
             $table->string('id_proof_type');
             $table->string('id_proof_number');
             $table->string('phone');

             $table->string('mobile_number');

             $table->string('email');
             $table->string('date');
             $table->string('remark');
            


            $table->integer('agentnotification_status')->default(1);
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
        Schema::dropIfExists('agentnotifications');
    }
}
