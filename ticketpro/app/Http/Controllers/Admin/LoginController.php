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

    public function login()
    {
        return view('Admin.login');
    }

    public function loginAdmin(Request $request)
    {
        if(Auth::guard('admin')->attempt(
            ['email'=>$request->email,'password'=>$request->password],$request->remember
        ))
        {
            return redirect()->intended(route('home'));
        }
        return redirect()->back()->withInput($request->only('email','remember'));
    }

}
