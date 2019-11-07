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
            $table->bigInteger('customerId')->unsigned()->index();
            // $table->bigInteger('eventId')->unsigned()->index();
            // $table->enum('status', ['draft','holding','waiting_for_payment', 'paid', 'finished', 'canceled']);
            $table->tinyInteger('status')->default('0');
            $table->timestamps();
            $table->integer('totalPrice');
            $table->integer('discountPrice');
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
