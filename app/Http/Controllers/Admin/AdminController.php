<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\AdminModel;
use Illuminate\Validation\Validator;
class AdminController extends Controller
{
    /**
     * Hàm khởi tạo được chạy ngay khi tạo đối tượng
     * Luôn chạy trước các hàm khác trong class
     * AdminController constructor.
     */

    public function  __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Phương thức trả về view của admin khi đăng nhập admin thành công
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Phương thức trả về view để đăng kí tài khoản admin
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createAdmin()
    {
        return view('admin.auth.register');
    }

    /**
     * Phương thức xủ lí lưu lại tài khoản vào DB khi đăng kí tài khoản admin
     * @param Request $request : DỮ Liệu lấy từ form đăng kí lên
     * @return \Illuminate\Http\RedirectResponse
     */
    public  function storeAdmin(Request $request)
    {
        //validate dữ liệu được gửi từ form đi
        $this->validate($request, array(
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ));

        //Khởi tạo model để lưu admin mới
        $adminModel = new AdminModel();
        $adminModel->name = $request->name;
        $adminModel->email = $request->email;
        $adminModel->password =bcrypt($request->password);
        $adminModel->save();
        return redirect()->route('admin.auth.login');
    }
}
