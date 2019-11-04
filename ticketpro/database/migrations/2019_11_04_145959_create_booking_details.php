<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookingDetails', function (Blueprint $table) {
            $table->bigInteger('bookingId')->unsigned()->index();
            $table->bigInteger('ticketClass')->unsigned()->index();
            $table->string('ticketCode');
            $table->timestamps();
            $table->primary('ticketCode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookingDetails');
    }
}
