<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    protected $fillable = [
        'username', 'email', 'password', 'api_token'
    ];

    /*public function profile(){
        return $this->hasOne(Profile::class);
    }*/
    public function generateToken(){
        $this->api_token = str_random(60);
        $this->save();

        return $this->api_token;
    }
}
