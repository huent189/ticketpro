<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAttendeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        // Schema::table('bookingDetails', function (Blueprint $table) {
        //     $table->dropPrimary('ticketCode');
        //     $table->dropColumn('ticketCode');    
        // });
        // Schema::table('bookingDetails', function (Blueprint $table) {
        //     $table->integer('quantity'); 
        //     $table->bigIncrements('id');
        // });
        Schema::create('attendees', function (Blueprint $table) {
            $table->string('ticketCode', 10)->primary();
            $table->bigInteger('bookingId')->unsigned()->index();
            $table->bigInteger('eventId')->unsigned()->index();
            $table->bigInteger('ticketClassId')->unsigned()->index();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->timestamps();
            $table->foreign('bookingId')->references('id')->on('booking')->onDelete('cascade');
            $table->foreign('eventId')->references('id')->on('events')->onDelete('cascade');
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
        Schema::dropIfExists('attendees');
    }
}
