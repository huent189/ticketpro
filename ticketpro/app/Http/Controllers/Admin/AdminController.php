<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\AdminModel;
class AdminController extends Controller
{
    //
    public function createAdmin()
    {
        return view('Admin.register');
    }

    public  function storeAdmin(Request $request)
    {
        $adminModel = new AdminModel();
        $adminModel->name = $request->name;
        $adminModel->email = $request->email;
        $adminModel->password =bcrypt($request->password);
        $adminModel->save();
        return redirect()->route('admin.auth.login');
    }
}
