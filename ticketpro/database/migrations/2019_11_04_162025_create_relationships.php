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
            $table->foreign('customerId')->references('id')->on('customers')->onDelete('cascade');
            // $table->foreign('eventId')->references('id')->on('events')->onDelete('cascade');
        });
        Schema::table('bookingDetails', function (Blueprint $table) {
            $table->foreign('bookingId')->references('id')->on('booking')->onDelete('cascade');
            $table->foreign('ticketClassId')->references('id')->on('ticketClasses')->onDelete('cascade');
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
