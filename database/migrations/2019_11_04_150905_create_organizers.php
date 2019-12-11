<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('profileImage');
            $table->string('website');
            $table->string('phone');
            $table->string('email');
            $table->longText('description');
            $table->string('bankAccountNumber');
            $table->string('bankAccountName');

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
        Schema::dropIfExists('organizers');
    }
}
