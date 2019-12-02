<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function chooseTicket($eventId, $userId)      
    {
        return view('front-end.modules.chooseTicket');
    }
}
