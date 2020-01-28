<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('userId')->unsigned()->index();
            $table->bigInteger('eventId')->unsigned()->index();
            $table->tinyInteger('status')->default('0');
            $table->string('email');
            $table->string('phone');
            $table->string('transactionId');
            $table->string('totalQuantity');
            $table->string('pdfTicketPath');
            $table->timestamps();
            $table->integer('totalPrice');
            $table->integer('discountPrice');
            $table->string('firstName');
            $table->string('lastName');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
