<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShelterBedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Creates the shelter_beds table
         * 
         * 
         */
        Schema::create('shelter_resources', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('facility_id')->unsigned();
            $table->foreign('facility_id')->references('id')->on('facilities');
            $table->smallInteger('total_beds')->unsigned();
            $table->smallInteger('filled_beds')->unsigned();
            $table->boolean('accepts_children')->default(false);
            $table->boolean('accepts_men')->default(false);
            $table->boolean('accepts_women')->default(false);
            $table->boolean('veterans')->default(false);
            $table->boolean('disability')->default(false);
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
        Schema::drop('shelter_resources');
    }
}
