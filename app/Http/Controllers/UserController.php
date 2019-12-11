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
        return view('front-end.Event.create-event');
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

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $image = $request->image->move(public_path('images\event'), $imageName);

//        dd($image);
//        dd("public\\images\\event\\".$request->image->getClientOriginalName());
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
        $location=Location::where('place',$request->place)->first();
        if(!$location)
        {
            $location=Location::create([
                'place'=>$request->place,
                'city'=>null,
                'fullAddreess'=>null,

            ]);
        }
//        dd($location);
        $category=Category::where('name',$request->categoryName)->first();
//        dd($category);
        $event=Event::create([
            'image'=>"images/event/".$imageName,
            'name'=>$request->eventName,
            'categoryId'=>$category->id,
            'organizerId'=>Auth::user()->id,
            'startTime'=>date_create($request->startTime),
            'endTime'=>date_create($request->endTime),
            'description'=>$request->description,
            'locationId'=>$location->id,
            'startSellingTime'=>date_create($request->timeStartSell),
            'endSellingTime'=>date_create($request->timeEndSell),
            'status'=>'0',
        ]);
//        dd($event);
        TicketClass::create([
            'eventId'=>$event->id,
            'type'=>'free',
            'price'=>$request->price,
            'numberAvailable'=>$request->numOfTicket,
            'total'=>$request->numOfTicket,
        ]);
        Session::put('message','Tạo thành công');
        return redirect(route('create-event'));
    }
}
