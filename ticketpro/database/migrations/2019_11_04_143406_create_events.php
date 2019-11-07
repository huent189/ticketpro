<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('categoryId')->unsigned()->index();
            $table->bigInteger('organizerId')->unsigned()->index();
            $table->dateTime('startTime');
            $table->dateTime('endTime');
            $table->longText('description');
            $table->string('image');
            $table->bigInteger('locationId')->unsigned()->index()->nullable();
            $table->dateTime('startSellingTime');
            $table->dateTime('endSellingTime');
            $table->tinyInteger('status')->default('0');
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
        Schema::dropIfExists('events');
    }
}
