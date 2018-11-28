<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('farmers',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nic');
            $table->string('firstname');
            $table->string('lastname'); 
            $table->string('mobile');
            $table->string('address');
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
        //
        Schema::dropIfExists('farmers');
    }
}