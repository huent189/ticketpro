<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Event;
class HomeController extends Controller
{
    //
    public function __constructor()
    {

    }

    public function getIndex()
    {
        $slide = Event::where('isPopular','1')->take(4)->get();
        $sportListEvent = Category::where('name', 'sport')->first()->events->take(2);
        // Category::join('events','events.categoryId','=','categories.id')
        // ->join('ticketClasses','ticketClasses.eventId','=','events.id')
        // ->join('locations','events.locationId','=','locations.id')
        // ->select('events.name','events.image','locations.place','ticketClasses.price')
        // ->where('categories.id','1')
        // ->paginate(2);
        $musicListEvent = Category::where('name', 'music')->first()->events->take(2);
//            Category::join('events','events.categoryId','=','categories.id')
//        ->join('ticketClasses','ticketClasses.eventId','=','events.id')
//        ->join('locations','events.locationId','=','locations.id')
//        ->select('events.name','events.image','locations.place','ticketClasses.price')
//        ->where('categories.id','2')
//        ->paginate(2);
        $conferenceListEvent = Category::where('name', 'conference')->first()->events->take(2);
//            Category::join('events','events.categoryId','=','categories.id')
//        ->join('ticketClasses','ticketClasses.eventId','=','events.id')
//        ->join('locations','events.locationId','=','locations.id')
//        ->select('events.name','events.image','locations.place','ticketClasses.price')
//        ->where('categories.id','3')
//        ->paginate(2);
        // dd($sportListEvent);
        return view('front-end.home',compact('sportListEvent','musicListEvent','conferenceListEvent','slide'));
    }

    public function getSportEvent()
    {
        $eventList = Category::where('name', 'sport')->first()->events;

//            Category::join('events','events.categoryId','=','categories.id')
//        ->join('ticketClasses','ticketClasses.eventId','=','events.id')
//        ->join('locations','events.locationId','=','locations.id')
//        ->select('events.name','events.image','locations.place','ticketClasses.price')
//        ->where('categories.id','1')
//        ->get();

        return view('front-end.modules.sport',compact('eventList'));
    }
    public function getMusicEvent()
    {
        $eventList = Category::where('name', 'music')->first()->events;
//            Category::join('events','events.categoryId','=','categories.id')
//        ->join('ticketClasses','ticketClasses.eventId','=','events.id')
//        ->join('locations','events.locationId','=','locations.id')
//        ->select('events.name','events.image','locations.place','ticketClasses.price')
//        ->where('categories.id','2')
//        ->get();

        return view('front-end.modules.sport',compact('eventList'));
    }

    public function getConferenceEvent()
    {
        $eventList = Category::where('name', 'conference')->first()->events;
//            Category::join('events','events.categoryId','=','categories.id')
//        ->join('ticketClasses','ticketClasses.eventId','=','events.id')
//        ->join('locations','events.locationId','=','locations.id')
//        ->select('events.name','events.image','locations.place','ticketClasses.price')
//        ->where('categories.id','3')
//        ->get();

        return view('front-end.modules.sport',compact('eventList'));
    }


    public function getTicketDetail($eventId)
    {
        $event = Event::where('id',$eventId)->first();
        // $event = Event::findOrFail($eventId);
        if($event){
            return view('front-end.modules.buyTicket', compact('event'));
        }
        return "Xin loi su kien nay khong ton tai";
    }
}
