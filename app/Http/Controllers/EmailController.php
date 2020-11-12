<?php

namespace App\Http\Controllers;

use App\Subscribed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;

class EmailController
{

    public function send2(Request $request)
    {
        $email = $request->input('email');
        $mail_content = $request->input('mail_content');
        $data = array('title' => 'Quảng cáo', 'content' => $mail_content);
        Mail::send('admin.email.send_reicept', $data, function ($message) use ($email) {
            $message->to($email, 'GymerStore Subscribers')->subject
            ('Quảng cáo sản phảm mới Gymer Store');
            $message->from('gymerstore@gmail.com', 'GymerStore');
        });
        return response()->json(['msg', 'DONE'], 200);
    }

    public function addSubcriber()
    {
        $obj = new Subscribed();
        $obj->email = Input::get('email');
        $obj->save();
        return redirect('/');
    }

}
