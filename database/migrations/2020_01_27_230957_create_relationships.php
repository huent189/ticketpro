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
            $table->foreign('categoryId')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('locationId')->references('id')->on('locations')->onDelete('set null');
            $table->foreign('organizerId')->references('id')->on('organizers')->onDelete('cascade');
        });
        Schema::table('ticketClasses', function (Blueprint $table) {
            $table->foreign('eventId')->references('id')->on('events')->onDelete('cascade');
        });
        Schema::table('booking', function (Blueprint $table) {
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('eventId')->references('id')->on('events')->onDelete('cascade');
        });
        Schema::table('bookingDetails', function (Blueprint $table) {
            $table->foreign('bookingId')->references('id')->on('booking')->onDelete('cascade');
            $table->foreign('ticketClassId')->references('id')->on('ticketClasses')->onDelete('cascade');
        });
        Schema::table('attendees',function(Blueprint $table)
        {
            $table->foreign('bookingId')->references('id')->on('booking')->onDelete('cascade');
            $table->foreign('eventId')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('ticketClassId')->references('id')->on('ticketClasses')->onDelete('cascade');
        });
        Schema::table('organizers',function(Blueprint $table)
        {
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relationships');
    }
}
