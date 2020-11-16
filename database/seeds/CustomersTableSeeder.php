<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        \Illuminate\Support\Facades\DB::table('customers')->truncate();
        \Illuminate\Support\Facades\DB::table('customers')->insert([
            [
                'username'=>'nguyenviethoang1197',
                'password'=>hash::make('hoang123'),
                'full_name'=>'Nguyễn Việt Hoàng',
                'gender'=>2,
                'address'=>'266 Nguyễn Văn Cừ, Hà Nội',
                'avatar'=>'',
                'email'=>'nguyenhoang1197@gmail.com',
                'DOB'=>'1997-11-01',
                'phone'=>'0981872297',
                'status'=>1,
                'created_at'=>\Carbon\Carbon::create(2020, 11, 1, 00, 00, 00),
                'updated_at'=>\Carbon\Carbon::create(2020, 11, 1, 00, 00, 00)
            ],
        ]);
    }

}
