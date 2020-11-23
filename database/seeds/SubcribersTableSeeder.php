<?php

use Illuminate\Database\Seeder;

class SubcribersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('subscribeds')->truncate();
        \Illuminate\Support\Facades\DB::table('subscribeds')->insert([
            [
                'email'=>'nguyenmanhduc197@gmail.com',
                'name'=>'Nguyen Manh Duc',
                'address'=>'Hanoi',
                'phone'=>'0392699990',
                'status'=>1,
            ],
            [
                'email'=>'nguyenhoang197@gmail.com',
                'name'=>'Nguyen Viet Hoang',
                'address'=>'Hanoi',
                'phone'=>'0981872297',
                'status'=>1,
            ],
        ]);
    }
}
