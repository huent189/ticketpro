<?php

use App\Category;
use Illuminate\Database\Seeder;

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
    }
}
