<?php

namespace App\Http\Controllers;
use DateTime;
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
        return view('/user/blade/user-detail/create-event');
    }

    /**
     * Hàm xử lí quá trình tạo sự kiện
     */
    public function storeEvent(Request $request)
    {
        // dd(($request->ticketName));
        //Validate time
        $startSellingTime=$request->timeStartSelling;
        $startSellingDate=$request->dateStartSelling;
        $mergeStartSelling = date('Y-m-d H:i:s', strtotime("$startSellingDate $startSellingTime"));

        $endSellingTime=$request->timeEndSelling;
        $endSellingDate=$request->dateEndSelling;
        $mergeEndSelling= date('Y-m-d H:i:s', strtotime("$endSellingDate $endSellingTime"));

        $endTime=$request->timeEnd;
        $endDate=$request->dateEnd;
        $mergeEndTimeEvent= date('Y-m-d H:i:s', strtotime("$endDate $endTime"));

        $startTime=$request->timeStart;
        $startDate=$request->dateStart;
        $mergeStartTimeEvent= date('Y-m-d H:i:s', strtotime("$startDate $startTime"));

        // Validate request Image
        $request->validate([
            'coverImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'ticketMap' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'organizerAvatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $coverImage = time().'cover.'.$request->coverImage->extension();
        $ticketMap = time().'map.'.$request->ticketMap->extension();
        $organizerAvatar = time().'organizer.'.$request->organizerAvatar->extension();

        // Create Location
        $location = new Location;
        $location->city = $request->city;
        $location->place = $request->place;
        $location->fullAddress = $request->fullAddress;
        $location->save();

        //Category 
        $category=Category::where('name',$request->eventType)->first();
        // dd($category->id);


        //Create Event
        $newEvent = new Event;
        $newEvent->name = $request->eventName;
        $newEvent->userId = Auth::user()->id;
        $newEvent->categoryId = $category->id;
        $newEvent->locationId = $location->id;
        $newEvent->startTime = $mergeStartTimeEvent;
        $newEvent->endTime = $mergeEndTimeEvent;
        $newEvent->description = $request->eventDescription;
        $newEvent->startSellingTime = $mergeStartSelling;
        $newEvent->endSellingTime = $mergeEndSelling;
        $newEvent->isBroadcasting = 0;
        $newEvent->isPopular = 0;
        $newEvent->status = 2;
        $newEvent->coverImage = '/uploads/eventcovers/' . $coverImage;
        $newEvent->ticketMap = '/uploads/ticket_maps/' . $ticketMap;
        $newEvent->save();
        
        //Create Orgnaizer
        $organizer = new Organizer;
        $organizer->eventId = $newEvent->id;
        $organizer->name = $request->organizerName;
        $organizer->profileImage = '/uploads/organizer_avatars/' . $organizerAvatar;
        $organizer->website = $request->organizerWeb;
        $organizer->description = $request->organizerDescription;
        $organizer->bankAccountNumber = $request->organizerBankAccNum;
        $organizer->bankAccountName = $request->organizerBankAccName;
        $organizer->phone = $request->organizerPhone;
        $organizer->email = $request->organizerEmail;
        $organizer->save();

        //Create TicketClasses
        for($i = 0; $i < count($request->ticketName); $i++)
        {
            $ticket = TicketClass::create([
                'eventId' => $newEvent->id,
                'type'=> $request->ticketName[$i],
                'price' => $request->ticketPrice[$i],
                'numberAvailable' => $request->ticketNum[$i],
                'total' => $request->ticketNum[$i],
                'minPerPerson' => 0,
                'maxPerPerson' => 10,
                'location' => '',
                'benefit' => $request->benefit[$i],
            ]);
            // $ticket->eventId = $newEvent->id;
            // $ticket->type = $request->ticketName[$i];
            // $ticket->price = $request->ticketPrice[$i];
            // $ticket->numberAvailable = $request->ticketNum[$i];
            // $ticket->total = $request->ticketNum[$i];
            // $ticket->minPerPerson = 0;
            // $ticket->maxPerPerson = 10;
            // $ticket->location = '';
            // $ticket->benefit = $request->benefit[$i];
            // $ticket->save();
        }

        // Move image to location
        $request->coverImage->move(public_path('\uploads\eventcovers'), $coverImage);
        $request->ticketMap->move(public_path('\uploads\ticket_maps'), $ticketMap);
        $request->organizerAvatar->move(public_path('\uploads\organizer_avatars'), $organizerAvatar);


//         $activeUser=Organizer::where('userId', Auth::user()->id)->first();
//         if(!$activeUser)
//         {
//             $activeUser=Organizer::create([
//                 'userId'=> Auth::user()->id,
//                 'profileImage'=>'được cập nhật',
//                 'website'=>'chưa được cập nhật',
//                 'description'=>'chưa có mô tả',
//                 'name'=>Auth::user()->name,
//                 'phone'=>$request->phoneNumber,
//                 'email'=>Auth::user()->email,
//                 'bankAccountNumber'=>$request->bankAccountNumber,
//                 'bankAccountName'=>$request->bankAccountName,

//             ]);
//         }
//         $location=Location::where('fullAddress',$request->fullAddress)->first();
//         if(!$location)
//         {
//             $location=Location::create([
//                 'place'=>$request->place,
//                 'city'=>$request->city,
//                 'fullAddress'=>$request->fullAddress,
//             ]);
//         }
//         $category=Category::where('name',$request->categoryName)->first();

//         $event=Event::create([
//             'image'=>"images/event/cover/".$imageCover,
//             'name'=>$request->eventName,
//             'categoryId'=>$category->id,
//             'organizerId'=>$activeUser->id,
//             'startTime'=>date_create($request->startTime),
//             'endTime'=>date_create($request->endTime),
//             'description'=>$request->eventDescription,
//             'locationId'=>$location->id,
//             'startSellingTime'=>date_create($startSellingTime),
//             'endSellingTime'=>date_create($endSellingTime),
//             'status'=>'2',
//             'ticketMap'=>"images/event/map/".$eventMap,
//         ]);
// //        dd($event);
//         $request->image->move(public_path('images\event\cover'), $imageCover);
//         $request->eventMap->move(public_path('images\event\map'), $eventMap);
// //        dd(count($request->ticketClassName));
//         for($i=0;$i<count($request->ticketClassName);$i++)
//         {
//             $ticket = TicketClass::create([
//                 'eventId' => $event->id,
//                 'type' => $request->ticketClassName[$i],
//                 'price' => $request->price[$i],
//                 'numberAvailable' => $request->numOfTicket[$i],
//                 'total' => $request->numOfTicket[$i],
//             ]);
//         }
        Session::put('message','Tạo thành công');
        return redirect(route('get_create_event'));
    }

    public function getProfile()
    {

        return view('/user/blade/user-detail/user-detail');
    }
    public function getBuyHistory()
    {
        $data=[];
        $eventBought=User::where('id',Auth::user()->id+1)->first()->booking()->get();
        dd($eventBought);

        return view('/user/blade/user-detail/ticket-bought');
    }
    public function buyEventDetail($eventid)
    {
        $totalMoney =0;
        $i=0;
        $event=DB::table('events')
            ->select('events.*')
            ->where('events.id', "=",$eventid)->first();
        $ticket = Db::table('ticketClasses')
            ->select('ticketClasses.*', DB::raw('count(*) as totalTicket'))
            ->join('bookingdetails','bookingdetails.ticketClassId','=', 'ticketclasses.id')
            ->join('booking','booking.id','=','bookingdetails.bookingId')
            ->where('booking.eventId','=',$eventid)
            ->where('booking.userId','=', Auth::user()->id)
            ->groupBy('ticketClasses.id')
            ->orderByRaw('price ASC')
            ->get();
        foreach ($ticket as $ticketClasses)
        {
            $totalMoney = $totalMoney + $ticketClasses->price * $ticketClasses->totalTicket ;
        }
        // dd($ticket);
       return view('front-end.modules.buyHistoryDetail', compact('ticket','event', 'i', 'totalMoney'));

    }
    public function getCreatedEventList()
    {
        $data = [];
        $data['eventList']=[];
        // dd(Auth::user()->id);
        $exitsUser=User::where('id',Auth::user()->id)->first();
        if($exitsUser)
        {
            $data['eventList']=$exitsUser->events()->get();
        }
        // dd($data['eventList']->first()->location()->get());
        return view('/user/blade/user-detail/event-created',compact('data'));
    }

    public  function getEventBuyDetail($eventid)
    {
        $totalMoney=0;
        $i=0;
        $tickets= DB::table('ticketclasses')
            ->select('ticketclasses.*')
            ->join('events','ticketclasses.eventId','=','events.id')
            ->where('events.id','=',$eventid)
            ->orderByRaw('price ASC')
            ->get();
        foreach ($tickets as $ticket)
        {
            $totalMoney = $totalMoney + ($ticket->total - $ticket->numberAvailable)* $ticket->price;
        }
//        dd($tickets);

        return view('front-end.modules.eventBuyDetails',compact('tickets','totalMoney','i'));
    }
    public function updateProfile()
    {
        return redirect()->route('profile');
    }

}


