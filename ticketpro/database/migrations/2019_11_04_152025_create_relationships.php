<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table)
        {
            $table->foreign('category')->references('id')->on('categories');
            $table->foreign('location')->references('id')->on('locations');
            $table->foreign('organizer')->references('id')->on('organizers');
        });
        Schema::table('ticketClasses', function (Blueprint $table) {
            $table->foreign('event')->references('id')->on('events');
        });
        Schema::table('booking', function (Blueprint $table) {
            $table->foreign('customerId')->references('id')->on('customers');
        });
        Schema::table('bookingDetails', function (Blueprint $table) {
            $table->foreign('bookingId')->references('id')->on('booking');
            $table->foreign('ticketClass')->references('id')->on('ticketClasses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
