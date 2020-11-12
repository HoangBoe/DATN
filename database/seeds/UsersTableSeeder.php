<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->truncate();
        \Illuminate\Support\Facades\DB::table('users')->insert([


            [
                'username'=>'admin01',
                'password'=>hash::make('admin01'),
                'full_name'=>'admin',
                'gender'=>2,
                'address'=>'Hanoi',
                'email'=>'admin01@gmail.com',
                'DOB'=>'1997-11-01',
                'phone'=>'0981872297',
                'role'=>1,
                'status'=>1
            ],

        ]);
    }
}
