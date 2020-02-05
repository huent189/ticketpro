<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Location;
use Illuminate\Http\Request;
use App\Category;
use App\Organizer;
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
        $data=[];
        $data['popularEvent'] = Event::where('isPopular','1')->where('isBroadcasting','1')->WhereDate('startTime', '>=', Carbon::now()->toDateString())->get();
        return view('user.blade.index',compact('data'));
    }

    public function getAll()
    {
        $data=[];
        $data['event'] = Event::where('isBroadcasting',1)->get();
        return view('user.blade.all-event',compact('data'));
    }

    public function bookingDetail($eventId)
    {
        $data=[];
        $data['event']=Event::where('id',$eventId)->get()->first();
        // dd($data['event']->ticketClasses()->get()[0]->id);
        return view('user.blade.booking',compact('data'));
    }

    public function getSportEvent()
    {
        $eventList = Category::where('name', 'sport')->first()->events;
        return view('front-end.modules.sport',compact('eventList'));
    }
    public function getMusicEvent()
    {
        $eventList = Category::where('name', 'music')->first()->events;
        return view('front-end.modules.music',compact('eventList'));
    }

    public function getConferenceEvent()
    {
        $eventList = Category::where('name', 'conference')->first()->events;
        return view('front-end.modules.conference',compact('eventList'));
    }


    public function getEventDetail($eventId)
    {
        $data=[];
        $data['event']=Event::where('id',$eventId)->first();
        $data['ticketClasses'] = Event::where('id',$eventId)->first()->ticketClasses()->orderBy('price', 'ASC')->get();
        if($data['event']){
            return view('user.blade.event-detail', compact('data'));
        }
        return "Xin lỗi!! Sự kiện này không còn tồn tại";
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
