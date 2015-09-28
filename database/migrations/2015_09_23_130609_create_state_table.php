<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStateTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function($table) {
            $table->increments('id');
            $table->string('name');
        });

        Schema::create('states', function($table) {
            $table->increments('id');
            $table->string('name');
        });

        Schema::create('cities', function($table) {
            $table->increments('id');
            $table->string('name');
        });

        Schema::create('locations', function($table) {
            $table->increments('id');
            $table->integer('city_id');
            $table->integer('state_id');
            $table->integer('country_id');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('code');
            $table->string('address');
        });

        Schema::create('accommodations', function($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->integer('location_id');
        });

        Schema::create('rooms', function($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('room_number');
            $table->integer('accommodation_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('countries');
        Schema::drop('states');
        Schema::drop('cities');
        Schema::drop('locations');
        Schema::drop('accommodations');
        Schema::drop('rooms');
    }

}
