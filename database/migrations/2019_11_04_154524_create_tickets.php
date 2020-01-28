<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticketClasses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('eventId')->unsigned()->index();
            $table->string('type');
            $table->integer('price');
            $table->integer('numberAvailable');
            $table->integer('total');
            $table->integer('minPerPerson')->nullable();
            $table->integer('maxPerPerson')->nullable();
            $table->string('location')->nullable();
            $table->longText('benefit')->nullable();
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
        Schema::dropIfExists('ticketClasses');
    }
}
