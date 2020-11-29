<?php

namespace App\Http\Controllers;

use App\Account;
use App\Customer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::all();

        return response()->json($customer, 200);
    }

    public function getUserInfo($id){
        return Customer::find($id);
    }
    public function getAllUserInfo(){
        return Customer::all();
    }
    public function setUserInfo(Request $request, $id){
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());

        return $customer;
    }
}
