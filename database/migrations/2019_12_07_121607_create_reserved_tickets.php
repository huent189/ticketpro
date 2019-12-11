<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservedTickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserved_tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ticket_id');
            $table->integer('event_id');
            $table->integer('quantity_reserved');
            $table->datetime('expires');
            $table->string('session_id', 45);
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserved_tickets');
    }
}
