<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenanceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenance_details', function (Blueprint $table) {
            $table->bigIncrements('id');

            //$table->string('User');
            //$table->string('Action_Officer');



            // $table->string('Status')->default("Not Fixed");
            //
            // $table->string('job_number');
            // $table->string('User');
            // $table->string('action');
            // $table->string('Status');
            // $table->string('Deployed_By');
            // $table->string('Deployed_to');


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
        Schema::dropIfExists('maintenance_details');
    }
}
