<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'sport',
            // 'events' => factory(App\Event::class, 5)->create()->each(function ($e){
            //     $e->organizer()->save(factory(App\Organizer::class)->make());
            //     $e->ticketClasses()->save(factory(App\TicketClass::class, 3)->make());
            //     $e->location()->save(factory(App\Location::class)->make());
            // }),
        ]);
        DB::table('categories')->insert([
            'name' => 'music',
        ]);
        DB::table('categories')->insert([
            'name' => 'conference',
        ]);
        factory(App\Organizer::class, 15)->create()->each(function($organizer){
            factory(App\Event::class)->create([
                'organizerId' => $organizer->id,
            ])->each(function ($e){
                $e->ticketClasses()->saveMany(factory(App\TicketClass::class, 3)->make());
                $e->location()->associate(factory(App\Location::class)->create());
                $e->save();
            });
        });
        // factory(App\Event::class, 15)->create()->each(function ($e){
        //     $e->organizer()->save(factory(App\Organizer::class)->make());
        //     $e->ticketClasses()->save(factory(App\TicketClass::class, 3)->make());
        //     $e->location()->save(factory(App\Location::class)->make());
        // });
        factory(App\Customer::class, 20)->create();
    }
}
