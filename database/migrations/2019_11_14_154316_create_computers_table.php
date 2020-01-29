<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('Item_Name');
            $table->string('Serial_Number');
            $table->string('type');
            $table->string('model');
            $table->string('operating_system');
            $table->string('hard_drive');
            $table->string('Ram');
            $table->string('processor');


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
        Schema::dropIfExists('computers');
    }
}
