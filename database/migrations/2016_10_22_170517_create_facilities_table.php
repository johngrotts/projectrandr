<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Creates the facilities table
         * 
         * 
         */
        Schema::create('facilities', function (Blueprint $table) {
            $table->increments('id');
            $table->text('facility_name');
            $table->mediumText('facility_description')->nullable();
            $table->text('facility_street_1');
            $table->text('facility_street_2');
            $table->text('facility_city');
            $table->text('facility_state');
            $table->integer('facility_zip')->unsigned();
            $table->text('facility_phone');
            $table->boolean('is_shelter')->default(false);
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
        Schema::drop('facilities');
    }
}
