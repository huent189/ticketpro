<?php

namespace App\Http\Controllers;

use App\Category;
use App\Location;
use App\Model\User;
use App\Organizer;
use App\TicketClass;
use App\Event;
use Illuminate\Http\Request;
use Auth;
use Session;
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
//        $event=Event::where('id',31)->first();
//        dd(gettype($event->startTime));
//        dd(gettype($request->startTime));
//        dd(date_format($request->startTime, 'Y-m-d H:i:s'));
        $startSellingTime=$request->timeStartSell[0];
        $endSellingTime=$request->timeEndSell[0];

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $image = $request->image->move(public_path('images\event'), $imageName);

        $activeUser=Organizer::where('id', Auth::user()->id)->first();
//        dd($activeUser);
        if(!$activeUser)
        {
            $newOrganizer=Organizer::create([
                'id'=> Auth::user()->id,
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
            'image'=>"images/event/".$imageName,
            'name'=>$request->eventName,
            'categoryId'=>$category->id,
            'organizerId'=>Auth::user()->id,
            'startTime'=>date_create($request->startTime),
            'endTime'=>date_create($request->endTime),
            'description'=>$request->eventDescription,
            'locationId'=>$location->id,
            'startSellingTime'=>date_create($startSellingTime),
            'endSellingTime'=>date_create($endSellingTime),
            'status'=>'0',
        ]);
//        dd($event);
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
}
