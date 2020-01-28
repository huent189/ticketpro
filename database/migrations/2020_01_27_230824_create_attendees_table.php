<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendees', function (Blueprint $table) {
            $table->string('ticketCode', 10)->primary();
            $table->bigInteger('bookingId')->unsigned()->index();
            $table->bigInteger('eventId')->unsigned()->index();
            $table->bigInteger('ticketClassId')->unsigned()->index();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->string('pdfTicketPath');
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
        Schema::dropIfExists('attendees');
    }
}
