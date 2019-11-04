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
            $table->bigInteger('category')->unsigned()->index();
            $table->bigInteger('organizer')->unsigned()->index();
            $table->dateTime('startTime');
            $table->dateTime('endTime');
            $table->longText('description');
            $table->string('image');
            $table->bigInteger('location')->unsigned()->index();
            $table->dateTime('startSellingTime');
            $table->dateTime('endSellingTime');
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
