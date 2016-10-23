<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientShelterResourceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('client_shelter_resources', function (Blueprint $table) {
            $table->integer('UUID')->unsigned();
            $table->integer('shelter_resource_id')->unsigned();
            $table->foreign('UUID')->references('UUID')->on('clients');
            $table->foreign('shelter_resource_id')->references('id')->on('shelter_resources');
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
        Schema::drop('client_shelter_resources');
    }
}
