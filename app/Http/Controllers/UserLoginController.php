<?php

namespace App\Http\Controllers;

use App\Account;
use App\Category;
use App\CategoryNews;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpKernel\Profiler\Profile;

class UserLoginController extends Controller
{
    public function login()
    {
        return view('user.user_login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|min:6|max:20',
            'password' => 'required|min:6|max:20'
        ], [
            'username.required' => 'Bạn phải nhập tên đăng nhập',
            'password.required' => 'Bạn phải nhập tên mật khẩu',
            'username.min' => 'Tên đăng nhập từ 6-20 ký tự',
            'username.max' => 'Tên đăng nhập từ 6-20 ký tự',
            'password.min' => 'Mật khẩu từ 6-20 ký tự',
            'password.max' => 'Mật khẩu từ 6-20 ký tự'
        ]);
        if (Auth::guard('customer')->attempt(['username' => $request->username, 'password' => $request->password, 'status' => 1])) {
            return redirect('/userprofile');
        } else {
            return redirect()->back()->with('message', 'Tên đăng nhập hoặc mật khẩu không đúng ');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function registerCustomer(Request $request)
    {
        return view('/user_login');
    }

    public function createCustomerAccount(Request $request)
    {
        $request->validate([
            'username' => 'required|min:6|max:20',
            'password' => 'required|min:6|max:20',
            'email' => 'required|email',
            'confirm-password' => 'required|min:6|max:20|same:password',
            'full_name' => 'required|min:2',
            'address' => 'required|min:5',
            'DOB' => 'required',
            'phone' => 'required|min:10|max:11'
        ], [
            'username.required' => 'Bạn phải nhập tên đăng nhập',
            'password.required' => 'Bạn phải nhập tên mật khẩu',
            'confirm-password.required' => 'Bạn phải nhập tên mật khẩu',
            'email.required' => 'Bạn phải nhập email',
            'full_name.required' => 'Bạn phải nhập tên đầy đủ của bạn',
            'address.required' =>'Bạn phải nhập địa chỉ',
            'DOB' => 'Bạn phải nhập ngày tháng năm sinh',
            'phone' => 'Bạn phải nhập số điện thoại',
            'username.min' => 'Tên đăng nhập từ 6-20 ký tự',
            'username.max' => 'Tên đăng nhập từ 6-20 ký tự',
            'password.min' => 'Mật khẩu từ 6-20 ký tự',
            'password.max' => 'Mật khẩu từ 6-20 ký tự',
            'confirm-password.min' => 'Mật khẩu từ 6-20 ký tự',
            'confirm-password.max' => 'Mật khẩu từ 6-20 ký tự',
            'confirm-password.same' => 'Mật khẩu xác nhận phải giống với mật khẩu đã nhập',
            'email.email' => 'Email không đúng định dạng',
            'full_name.min' => 'Tên phải có trên 4 kí tự',
            'address.min' => 'Địa chỉ phải từ 5 ký tự trở lên',
            'phone.min' => 'Số điện thoại có 10 hoặc 11 chữ số',
            'phone.max' => 'Số điện thoại có 10 hoặc 11 chữ số'

        ]);

        if ($this->isExistUsername(Input::get('username'))) {
            return redirect()->back()->with('message', 'Đăng ký không thành công, tên tài khoản đã tồn tại');
        }
        if ($this->isExistEmail(Input::get('email'))) {
            return redirect()->back()->with('message', 'Đăng ký không thành công, email đã tồn tại');
        }

        $obj = new Customer();
        $obj->username = Input::get('username');
        $obj->password = hash::make(Input::get('password'));
        $obj->full_name = Input::get('full_name');
        $obj->email = Input::get('email');
        $obj->address = Input::get('address');
        $obj->gender = str_replace('option','',Input::get('gender'));
        $obj->phone = Input::get('phone');
        $obj->DOB = Input::get('DOB');
        $obj->role = 2;
        $obj->status = 1;
        $obj->save();
        return redirect()->back()->with('message', 'Đăng ký thành công');

    }

    public static function isExistEmail($email)
    {
        $obj = Customer::where('email', '=', $email)->first();
        if ($obj != null) {
            return true;
        } else return false;
    }

    public static function isExistUsername($username)
    {
        $obj = Customer::where('username', '=', $username)->first();
        if ($obj != null) {
            return true;
        } else return false;
    }

    public function showUserProfile()
    {
        if (Auth::guard('customer')-> check()) {
            $obj_category = Category::where('status',1)->get();
            $obj_categoryNews = CategoryNews::all();
            return view('user.user_profile')
                ->with('obj_category', $obj_category)
                ->with('obj_categoryNews', $obj_categoryNews)
                ->with('logged_in', true);
        } else return redirect('/user/login')->with('message', 'Bạn phải đăng nhập để có thể vào profile');
    }

    public function store(Request $request){
        $email= Auth::guard('customer')->user()->email;
        Customer::where('email',$email)->update([
            'full_name'=> request ('full_name'),
            'address'=> request ('address'),
            'phone'=> request ('phone'),
        ]);
        return redirect()->back()
            ->with('message',"Profile Updated Successfully");
    }

    public function avatar (Request $request){
        $email= Auth::guard('customer')->user()->email;
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $text = $file->getClientOriginalExtension();
            if($text != 'jpg' && $text != 'png' && $text != 'jpeg'){
                return redirect()->back()
                    ->with('message',"Choose jpg, png, jpeg files extensions");
            }
            $fileName = time().'.'.$text;
            $file->move('img/avatar',$fileName);
            Customer::where('email',$email)->update([
                'avatar'=>$fileName
            ]);
            return redirect()->back()
                ->with('message',"Avatar Uploaded Successfully");
        }
    }

}

