<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Location;
use App\TicketClass;
use App\Model\User;
use App\Event;
use App\Organizer;
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
        
        DB::table('categories')->insert([
            'name' => 'sport',
        ]);
        DB::table('categories')->insert([
            'name' => 'music',
        ]);
        DB::table('categories')->insert([
            'name' => 'conference',
        ]);
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
        factory(User::class, 20)->create()->each(function($user)
        {
            factory(Event::class,3)->create([
                'userId' => $user->id,
                'coverImage' => '/uploads/eventcovers/Liquid_Buffet.jpg',
                'ticketMap'=>'/uploads/ticket_maps/aaa_vietnam.jpg',
            ])->each(function ($e){               
                $e->ticketClasses()->saveMany(factory(TicketClass::class, 1)->make());
                $e->location()->associate(factory(Location::class)->create());
                $e->save();
            });
        });
        Event::each(function($e){
            factory(App\Organizer::class)->create([
                'eventId' => $e->id,
            ]);
        });
        TicketClass::all()->each(function($t){
            $t->minPerPerson = 0;
            $t->maxPerPerson = rand(1,5);
            $t->save();
        });
    }
}
