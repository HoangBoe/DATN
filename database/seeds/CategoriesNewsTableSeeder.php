<?php

use Illuminate\Database\Seeder;


class CategoriesNewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('categories_news') -> truncate();
        \Illuminate\Support\Facades\DB::table('categories_news') -> insert([
            [
                'id' => '1',
                'name' => 'Kiến thức thể hình',
            ],
            [
                'id' => '2',
                'name' => 'Bài tập thể hình',
            ],
            [
                'id' => '3',
                'name' => 'Dinh dưỡng thể hình',
            ],

        ]);
    }
}