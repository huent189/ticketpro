<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use App\Category;
use App\Attendee;
use App\Event;
class HomeController extends Controller
{
    //
    public function __constructor()
    {

    }

    public function getIndex()
    {
        // $data=[];
        // $data['slide'] = Event::where('isPopular','1')->where('isBroadcasting',1)->get();
        // $event=Event::get()->first()->numOfAttendee();
        $data = Event::where('isBroadcasting',1)->get();
        dd($data);
        return view('user.blade.index');
    }

    public function allEvent()
    {
        $data=[];
        $data['allEvent'] = Event::where('isBroadcasting',1)->get();
        return 1;
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
//        dd($eventList);
        return view('front-end.modules.music',compact('eventList'));
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

        return view('front-end.modules.conference',compact('eventList'));
    }


    public function getTicketDetail($eventId)
    {
        $event=Event::where('id',$eventId)->first();
        $ticketClasses = Event::where('id',$eventId)->first()->ticketClasses()->orderBy('price', 'ASC')->get();
        // $event = Event::findOrFail($eventId);
        if($ticketClasses){
            return view('front-end.modules.buyTicket', compact('ticketClasses','event'));
        }
        return "Xin loi su kien nay khong ton tai";
    }

    public function getSearch(Request $request)
    {
        $location=Location::where('city','like','%'.$request->key.'%')->first();
//        dd($location);
        $eventList = $eventList = Event::where('name','like', '%'.$request->key.'%')
//                                        ->orWhere('locationId',$location->id)
                                        ->get();
//        dd($eventList);
        return view('front-end.modules.search',compact('eventList'));
    }
}
