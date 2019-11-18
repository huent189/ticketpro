<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class HomeController extends Controller
{
    //
    public function __constructor()
    {

    }

    public function getIndex()
    {
        $sportListEvent = Category::join('events','events.categoryId','=','categories.id')
        ->join('ticketclasses','ticketclasses.eventId','=','events.id')
        ->join('locations','events.locationId','=','locations.id')
        ->select('events.name','events.image','locations.place','ticketclasses.price')
        ->where('categories.id','1')
        ->paginate(2);

        $musicListEvent = Category::join('events','events.categoryId','=','categories.id')
        ->join('ticketclasses','ticketclasses.eventId','=','events.id')
        ->join('locations','events.locationId','=','locations.id')
        ->select('events.name','events.image','locations.place','ticketclasses.price')
        ->where('categories.id','2')
        ->paginate(2);

        $conferenceListEvent = Category::join('events','events.categoryId','=','categories.id')
        ->join('ticketclasses','ticketclasses.eventId','=','events.id')
        ->join('locations','events.locationId','=','locations.id')
        ->select('events.name','events.image','locations.place','ticketclasses.price')
        ->where('categories.id','3')
        ->paginate(2);
        // dd($sportListEvent);

        return view('front-end.home',compact('sportListEvent','musicListEvent','conferenceListEvent'));
    }
}
