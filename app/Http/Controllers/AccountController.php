<?php

namespace App\Http\Controllers;

use App\Account;
use App\Customer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (Auth::check()) {
            $obj = User::paginate(10);
            return view('admin.account.list')->with('obj', $obj);
        } else return redirect('/admin/login')->with('message', 'Bạn phải đăng nhập để sử dụng quyền admin');


    }

    public function indexCustomer()
    {
        //
        if (Auth::check()) {
            $obj = Customer::paginate(10);
            return view('admin.account.listCustomer')->with('obj', $obj);
        } else return redirect('/admin/login')->with('message', 'Bạn phải đăng nhập để sử dụng quyền admin');


    }

    public function lockCustomer()
    {
        if (Auth::check()) {
            $obj = Customer::find(Input::get('id'));
            if ($obj == null) {
                return view('404');
            }
            $obj->status = !$obj->status;
            $obj->save();
            return response()->json(['success' => 1], 200);
        } else return response()->json(['success' => 0], 400);
    }



    public function destroy($id)
    {
        //
        if (Auth::check()) {
        } else return redirect('/admin/login')->with('message', 'Bạn phải đăng nhập để sử dụng quyền admin');
    }
}
