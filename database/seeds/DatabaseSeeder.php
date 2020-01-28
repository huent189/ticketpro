<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\TicketClass;
use App\Model\User;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 20)->create();
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
                'coverImage' => '/uploads/eventcovers/Liquid_Buffet.jpg'
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
        Category::where('name', 'music')->first()->events->each(function($e){
            $e->name = "Music ".$e->name;
            $e->save();
        });
        Category::where('name', 'sport')->first()->events->each(function($e){
            $e->name = "Sport ".$e->name;
            $e->save();
        });
        Category::where('name', 'conference')->first()->events->each(function($e){
            $e->name = "Conference ".$e->name;
            $e->save();
        });
        Category::where('name', 'music')->first()->events->each(function($e){
            $e->name = "Music ".$e->name;
            $e->save();
        });
        Category::where('name', 'sport')->first()->events->each(function($e){
            $e->name = "Sport ".$e->name;
            $e->save();
        });
        Category::where('name', 'conference')->first()->events->each(function($e){
            $e->name = "Conference ".$e->name;
            $e->save();
        });
        TicketClass::all()->each(function($t){
            $t->minPerPerson = 0;
            $t->maxPerPerson = rand(1,5);
            $t->save();
        });
    }
}
