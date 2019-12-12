<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    //
    use AuthenticatesUsers;
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    /**
     * Phương thức trả về view để đăng nhập cho admin
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login()
    {
        return view('front-end.modules.signIn');
    }


    /**
     * Phương thức xử lí đăng nhập cho admin
     * @param Request $request: dữ liệu đăng nhập được lấy từ form
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginAdmin(Request $request)
    {
        //validate dữ liệu
        $this->validate($request,array(
            'email'=>'required|email',
            'password'=>'required|min:4'
        ));

        if(Auth::guard('admin')->attempt(
            ['email'=>$request->email,'password'=>$request->password],$request->remember
        ))
        {
            //nếu đăng nhập thành công sẽ chuyển về view dashboard của admin
            return redirect()->intended(route('admin.dashboard'));
        }
        //nếu đăng nhập thất bại thì quay trở về form đăng nhập.
        return redirect()->back()->withInput($request->only('email','remember'));
    }

    /**
     * Phương thức xử lí việc đăng xuất của người dùng
     * @param Request $request
     */
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.auth.login');
    }

}
