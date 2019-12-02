<?php

namespace App\Http\Controllers\Organizers;

use App\Http\Controllers\Controller;
use App\Model\OrganizerAuthModel;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class OrganizerAuthController extends Controller
{

    /**
     * Hàm khởi tạo đối tượng
     */

    public function  __construct()
    {
        $this->middleware('auth:organizer')->only('index');
    }

    /**
     * Hàm trả về view cho mặc định dashboard cho Organizer
     */
    public function  index()
    {
        return view('organizer.dashboard');
    }


    /**
     * hàm trả về view đăng kí cho Organizer
     */
    public function createOrganizer()
    {
        return view('organizer.auth.register');
    }

    /**
     * Hàm xử lí đăng kí thành viên mới cho Organizer
     */
    public function storeOrganizer(Request $request)
    {
        $this->validate($request,array(
            'name'=>'required',
           'email'=>'required',
           'password'=>'required',
        ));

        $organizerModel = new OrganizerAuthModel();
        $organizerModel->name = $request->name;
        $organizerModel->email = $request->email;
        $organizerModel->password = bcrypt($request->password);
        $organizerModel->save();

        return redirect()->route('organizer.auth.login');

    }

    /**
     * Hàm trả về view đăng nhập cho Organizer
     */
    public function  login()
    {
        return view('organizer.auth.login');
    }

    /**
     * hàm xử lí đăng nhập cho Organizer
     */
    public function  loginOrganizer(Request $request)
    {
        $this->validate($request,array(
            'email'=>'required|email',
            'password'=>'required|min:4',
        ));

        if(Auth::guard('organizer')->attempt(
            ['email'=>$request->email, 'password'=>$request->password],$request->remember
        ))
        {
            return redirect()->intended(route('organizer.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email','remember'));
    }

    /**
     * Hàm xử lí logout  cho Organizer
     */
    public function  logout()
    {
        Auth::guard('organize')->logout();
        return redirect()->route('organizer.auth.login');
    }


}
