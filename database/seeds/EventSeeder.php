<?php

use App\Category;
use App\Organizer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $e = Category::where('name', 'music')->first()->events;
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
        // Organizer::all()->each(function ($o)
        // {
        //     $o->profileImage = "uploads/organizer_avatars/dong_nam_media.jpg";
        //     $o->save();
        // });
        DB::table('organizers')->update(['profileImage' => 'uploads/organizer_avatars/dong_nam_media.jpg']);
        DB::table('events')->update(['ticketMap' => 'uploads/ticket_maps/aaa_vietnam.jpg']);
    }
}
