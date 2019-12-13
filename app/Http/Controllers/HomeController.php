<?php

namespace App\Http\Controllers;

use App\Location;
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
        $event=Event::get();
        $sportListEvent=[];
        $musicListEvent=[];
        $conferenceListEvent=[];
        foreach($event as $e)
        {
            if($e->categoryId==1 && $e->startTime > date("Y-m-d H:i:s") && sizeof($sportListEvent)<2)
            {
                array_push($sportListEvent,$e);                
            }    
            elseif($e->categoryId==2 && $e->startTime > date("Y-m-d H:i:s")&&sizeof($musicListEvent)<2)
            {
                array_push($musicListEvent,$e);                
            }
            elseif($e->categoryId==3 && $e->startTime > date("Y-m-d H:i:s")&&sizeof($conferenceListEvent)<2)
            {
                array_push($conferenceListEvent,$e);                
            }
            if(sizeof($sportListEvent)==2 &&sizeof($musicListEvent)==2 &&sizeof($conferenceListEvent)==2)
            {
                break;
            }       
        }

        

//         // Category::join('events','events.categoryId','=','categories.id')
//         // ->join('ticketClasses','ticketClasses.eventId','=','events.id')
//         // ->join('locations','events.locationId','=','locations.id')
//         // ->select('events.name','events.image','locations.place','ticketClasses.price')
//         // ->where('categories.id','1')
//         // ->paginate(2);

//         $musicListEvent = Category::where('name', 'music')->first()->events->take(2);
// //            Category::join('events','events.categoryId','=','categories.id')
// //        ->join('ticketClasses','ticketClasses.eventId','=','events.id')
// //        ->join('locations','events.locationId','=','locations.id')
// //        ->select('events.name','events.image','locations.place','ticketClasses.price')
// //        ->where('categories.id','2')
// //        ->paginate(2);

//         $conferenceListEvent = Category::where('name', 'conference')->first()->events->take(2);
// //            Category::join('events','events.categoryId','=','categories.id')
// //        ->join('ticketClasses','ticketClasses.eventId','=','events.id')
// //        ->join('locations','events.locationId','=','locations.id')
// //        ->select('events.name','events.image','locations.place','ticketClasses.price')
// //        ->where('categories.id','3')
// //        ->paginate(2);
//         // dd($sportListEvent);

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
        $event = Event::where('id',$eventId)->first();
        // $event = Event::findOrFail($eventId);
        if($event){
            return view('front-end.modules.buyTicket', compact('event'));
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
