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
                'status'=>1
            ],
//            [
//                'username'=>'nguyenviethoang1197',
//                'password'=>hash::make('hoang123'),
//                'status'=>1
//            ],

        ]);
    }
}
