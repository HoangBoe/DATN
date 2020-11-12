<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('categories') -> truncate();
        \Illuminate\Support\Facades\DB::table('categories') -> insert([
           [
               'id'=>'1',
               'name' => 'Whey Protein',
               'description' => 'Whey Protein',
               'image' => 'https://res.cloudinary.com/dzbi63fko/image/upload/c_fit,h_400,w_400/1584333154.png',
           ],
           [
               'id'=>'2',
               'name' => 'Sữa tăng cân',
               'description' => 'Sữa tăng cân',
               'image' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1589208094/seri6_hvq7ip.jpg',
           ],
           [
               'id'=>'3',
               'name' => 'Bcaa',
               'description' => 'Bcaa',
               'image' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1589207371/61-plus-plm37eel-sl1000_efs9io.jpg',
           ],
           [
               'id'=>'4',
               'name' => 'Vitamin, khoáng',
               'description' => 'Vitamin, khoáng',
               'image' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1589207449/platinum-100_-omega-fish-oil_master_etbgmd.jpg',
           ],
           [
               'id'=>'5',
               'name' => 'Pre-workout',
               'description' => 'Pre-workout',
               'image' => 'https://res.cloudinary.com/dzbi63fko/image/upload/c_fit,h_1200,w_1185/1584340104.png',
           ],
           [
               'id'=>'6',
               'name' => 'Phụ kiện',
               'description' => 'Phụ kiện',
               'image' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1589207559/day-quan-co-tay-valeo_td7rpe.jpg',
           ],
        ]);
    }
}
