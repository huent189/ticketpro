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
        $data['popularEvent'] = Event::where('isPopular','1')->where('isBroadcasting','1')->WhereDate('startTime', '>=', Carbon::now()->setTimezone('Asia/Phnom_Penh')->toDateString())->get();
        return view('user.blade.index',compact('data'));
    }

    public function getAll()
    {
        $data=[];
        $data['request'] = ["location" => null,
                            "eventType" => null,
                            "timeStart" => null,
                            "price" => null];
        // dd($data['request']['location']);
        // dd($data['request']);
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
        $allEvent = Event::where('isBroadcasting',1)->get();
        $data = [];
        $data['event']=[];
        $data['request'] = array("location" => $request->location,
                            "eventType" => $request->eventType,
                            "timeStart" => $request->timeStart,
                            "price" => $request->price);
        $eventLocationR = [];
        $eventPriceR = [];
        $eventDateR = [];
        $eventTypeR = [];

    //handing location request
        if($request->location == null)
        {
            foreach($allEvent as $event)
            {
                array_push($eventLocationR, $event->id);
            }
        }
        elseif($request->location == '3')
        {
            $locations = Location::where([['city','not like', '%Hồ Chí Minh%'],['city','not like', '%Hà Nội%']])->get();
            foreach($locations as $location)
            {
                if($location->event()->first() && $location->event()->first()->isBroadcasting==1)
                {
                    array_push($eventLocationR, $location->event()->first()->id);
                } 
            }
        }
        else
        {
            $locations = Location::where('city','like','%'.$request->location.'%')->get();
            foreach($locations as $location)
            { 
                if($location->event()->first() && $location->event()->first()->isBroadcasting==1)
                {
                    array_push($eventLocationR, $location->event()->first()->id);
                }  
            }
        }
        // dd($eventLocationR);


    //handing event type request
        if($request->eventType==null)
        {
            foreach($allEvent as $event)
            {
                array_push($eventTypeR, $event->id);
            }
        }
        else
        {
            $eventsType = Category::where('name', 'like', '%'.$request->eventType.'%')->first()->events()->where('isBroadcasting',1)->get();
            foreach($eventsType as $event)
            {
                array_push($eventTypeR, $event->id);
            }
        }
        // dd($eventTypeR);

    //handing event date request
        // dd(Carbon::now()->addDays($request->timeStart)->setTimezone('Asia/Phnom_Penh')->toDateString(). '----'.Carbon::now()->setTimezone('Asia/Phnom_Penh')->toDateString());
        if($request->timeStart == null)
        {
            foreach($allEvent as $event)
            {
                array_push($eventDateR, $event->id);
            }
        }
        else
        {
            $eventsDate = Event::where('isBroadcasting',1)->WhereDate('startTime', '>=', Carbon::now()->setTimezone('Asia/Phnom_Penh')->toDateString())
                                ->WhereDate('startTime', '<=', Carbon::now()->setTimezone('Asia/Phnom_Penh')->addDays($request->timeStart)->toDateString())->get();
            foreach($eventsDate as $event)
            {
                array_push($eventDateR, $event->id);
            }
        }
        
        // dd($eventDateR);

    //handing event price request
        if($request->price == null)
        {
            foreach($allEvent as $event)
            {
                array_push($eventPriceR, $event->id);
            }        
        }
        elseif ($request->price == '0')
        {
            foreach(Event::where('isBroadcasting',1)->get() as $event)
            {              
                if($event->minPrice() == 0)
                {
                    array_push($eventPriceR, $event->id);
                }
            }
        }
        else
        {
            foreach(Event::where('isBroadcasting',1)->get() as $event)
            {
                if($event->minPrice() > 0)
                {
                    array_push($eventPriceR,$event->id);
                }
            }
        }
        // dd($eventPriceR);

        //merge event
        if(count($eventDateR) > 0 && count($eventLocationR) > 0 && count($eventTypeR) > 0 && count($eventPriceR) >0)
        {
            foreach($eventLocationR as $eventId)
            {
                // dd($this->isContained($event->first() , $eventTypeR ));
                if(in_array($eventId , $eventDateR ) && in_array($eventId , $eventPriceR) && in_array($eventId , $eventTypeR))
                {
                    array_push($data['event'],Event::find($eventId));
                }
            }   
        }
        // dd($data);
        return view('user.blade.all-event',compact('data'));
    }
}
