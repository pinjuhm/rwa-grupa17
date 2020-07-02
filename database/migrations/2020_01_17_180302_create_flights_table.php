<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('city_id_from');
            $table->unsignedBigInteger('city_id_to');
            $table->unsignedBigInteger('plane_id');
            $table->integer('price');
            $table->timestamp('datetime');
            $table->integer('duration');
            $table->boolean('promoted')->default(false);
            $table->boolean('completed')->default(false);
            $table->timestamps();

            $table->foreign('city_id_from')->references('id')->on('cities');
            $table->foreign('city_id_to')->references('id')->on('cities');
            $table->foreign('plane_id')->references('id')->on('planes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
