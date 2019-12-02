<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function postCreateEvent(Request $request)
    {

    }
}
