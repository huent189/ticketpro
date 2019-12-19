<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Category;
use App\Location;
use App\Model\User;
use App\Organizer;
use App\TicketClass;
use App\Event;
use Illuminate\Http\Request;
use Auth;
use Session;
use Illuminate\Support\Facades\DB;
Session_start();
class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    /**
     * Hàm trả về form tạo sự kiện
     */
    public function  getCreateEvent()
    {
        $activeUser=Organizer::where('id', Auth::user()->id)->first();
        $existOrganizers= false;
        if($activeUser) $existOrganizers=true;
        return view('front-end.Event.create-event',compact('existOrganizers'));
    }

    /**
     * Hàm xử lí quá trình tạo sự kiện
     */
    public function storeEvent(Request $request)
    {
//        dd($request->all());
//        $event=Event::first();
//        dd($event);
//        dd(gettype($event->startTime));
//        dd(gettype($request->startTime));
//        dd(date_format($request->startTime, 'Y-m-d H:i:s'));
        $startSellingTime=$request->timeStartSell[0];
        $endSellingTime=$request->timeEndSell[0];

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'eventMap'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageCover = time().'cover.'.$request->image->extension();
        $eventMap = time().'map.'.$request->eventMap->extension();
//        dd($eventMap);
        $activeUser=Organizer::where('id', Auth::user()->id)->first();
//        dd($activeUser);
        if(!$activeUser)
        {
            $newOrganizer=Organizer::create([
                'userId'=> Auth::user()->id,
                'profileImage'=>'được cập nhật',
                'website'=>'chưa được cập nhật',
                'description'=>'chưa có mô tả',
                'name'=>Auth::user()->name,
                'phone'=>$request->phoneNumber,
                'email'=>Auth::user()->email,
                'bankAccountNumber'=>$request->bankAccountNumber,
                'bankAccountName'=>$request->bankAccountName,

            ]);
        }
        $location=Location::where('fullAddress',$request->fullAddress)->first();
        if(!$location)
        {
            $location=Location::create([
                'place'=>$request->place,
                'city'=>$request->city,
                'fullAddress'=>$request->fullAddress,
            ]);
        }
        $category=Category::where('name',$request->categoryName)->first();

        $event=Event::create([
            'image'=>"images/event/cover/".$imageCover,
            'name'=>$request->eventName,
            'categoryId'=>$category->id,
            'organizerId'=>Auth::user()->id,
            'startTime'=>date_create($request->startTime),
            'endTime'=>date_create($request->endTime),
            'description'=>$request->eventDescription,
            'locationId'=>$location->id,
            'startSellingTime'=>date_create($startSellingTime),
            'endSellingTime'=>date_create($endSellingTime),
            'status'=>'2',
            'ticketMap'=>"images/event/map/".$eventMap,
        ]);
//        dd($event);
        $request->image->move(public_path('images\event\cover'), $imageCover);
        $request->eventMap->move(public_path('images\event\map'), $eventMap);
//        dd(count($request->ticketClassName));
        for($i=0;$i<count($request->ticketClassName);$i++)
        {
            $ticket = TicketClass::create([
                'eventId' => $event->id,
                'type' => $request->ticketClassName[$i],
                'price' => $request->price[$i],
                'numberAvailable' => $request->numOfTicket[$i],
                'total' => $request->numOfTicket[$i],
            ]);
        }
        Session::put('message','Tạo thành công');
        return redirect(route('create-event'));
    }

    public function getProfile()
    {

        return view('front-end.modules.userProfile');
    }
    public function getBuyHistory()
    {
        $i=0;
        $events = DB::table('events')
            ->select('events.*')
            ->join('booking', 'events.id', '=', 'booking.eventId')
            ->where('booking.userId','=',Auth::user()->id)
            ->orderByRaw('created_at DESC')
            ->distinct()
            ->get();
//        dd($events);

        return view('front-end.modules.buyHistory',compact('events','i'));
    }
    public function buyEventDetail($eventid)
    {
        $ticket = Db::table('ticketClasses')
            ->select('ticketClasses.*', DB::raw('count(*) as totalTicket'))
            ->join('bookingdetails','bookingdetails.ticketClassId','=', 'ticketclasses.id')
            ->join('booking','booking.id','=','bookingdetails.bookingId')
            ->where('booking.eventId','=',$eventid)
            ->where('booking.userId','=', Auth::user()->id)
            ->groupBy('ticketClasses.id')
            ->orderByRaw('price ASC')
            ->get();
        // dd($ticket);
       return view('front-end.modules.buyHistoryDetail');

    }
    public function getCreatedEventList()
    {
        $i=0;
        $events= DB::table('events')
            ->select('events.*')
            ->join('organizers','organizers.id','=', 'events.organizerId')
            ->where('organizers.userId', '=', Auth::user()->id)
            ->orderByRaw('created_at DESC')
            ->get();
//        dd($events);
        return view('front-end.modules.eventList',compact('events','i'));
    }

    public  function getEventBuyDetail($eventid)
    {
        return view('front-end.modules.eventBuyDetails');
    }
    public function updateProfile()
    {
        return redirect()->route('profile');
    }

}


