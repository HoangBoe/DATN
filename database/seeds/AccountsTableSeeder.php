 <?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('accounts')->truncate();
        \Illuminate\Support\Facades\DB::table('accounts')->insert([

            [
                'username'=>'admin01',
                'password'=>'admin01',
                'full_name'=>'admin',
                'gender'=>2,
                'address'=>'Hanoi',
                'email'=>'admin01@gmail.com',
                'DOB'=>'1997-11-01',
                'phone'=>'0981872297`',
                'role'=>1
            ],


        ]);
    }
}
