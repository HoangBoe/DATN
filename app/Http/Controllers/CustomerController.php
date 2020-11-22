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
    public function getUserInfo(Request $id){
        return Customer::find($id);
    }
    public function setUserInfo(Request $request, Customer $customer){
        $customer->update($request->all());
        return response()->json($customer, 201);
    }
}
