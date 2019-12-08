<?php

use App\ReservedTicket;
use App\TicketClass;
use Illuminate\Database\Seeder;

class MinMaxTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TicketClass::all()->each(function($t){
            $t->minPerPerson = 0;
            $t->maxPerPerson = rand(1,5);
            $t->save();
        });
    }
}
