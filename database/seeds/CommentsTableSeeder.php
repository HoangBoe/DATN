<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('comments') -> truncate();
        \Illuminate\Support\Facades\DB::table('comments') -> insert([
            [
                'id' => '1',
                'username' => 'manh duc',
                'email' => 'nguyenmanhduc197@gmail.com',
                'content' => 'bài này được đấy bạn ôii',
                'id_news' => '1',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '2',
                'username' => 'ducank',
                'email' => 'ngducanh1223@gmail.com',
                'content' => 'hay phết nhỉ',
                'id_news' => '1',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '3',
                'username' => 'nam gay',
                'email' => 'vohophuongnam@gmail.com',
                'content' => 'hayy!!!!',
                'id_news' => '1',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '4',
                'username' => 'nambeo',
                'email' => 'namngongoc@gmail.com',
                'content' => 'hay phết nhỉ',
                'id_news' => '4',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '5',
                'username' => 'ducank',
                'email' => 'ngducanh1223@gmail.com',
                'content' => 'bài viết rất bổ ích!!',
                'id_news' => '4',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '6',
                'username' => 'hieu ku',
                'email' => 'hieunm@gmail.com',
                'content' => 'ad ơi inbox mình với',
                'id_news' => '2',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '7',
                'username' => 'nam gay',
                'email' => 'vohophuongnam@gmail.com',
                'content' => 'bài viết hay',
                'id_news' => '3',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '8',
                'username' => 'hai anh',
                'email' => 'hoangtunhaben@gmail.com',
                'content' => 'bài viết cũng được.. nhưng tôi nghĩ vẫn thiếu, cần p bổ sung!',
                'id_news' => '7',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '9',
                'username' => 'nambeo',
                'email' => 'namngongoc@gmail.com',
                'content' => 'được',
                'id_news' => '7',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '10',
                'username' => 'chowie',
                'email' => 'nguyentuongchau@gmail.com',
                'content' => 'được của ló!!',
                'id_news' => '6',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '11',
                'username' => 'bui dong tung',
                'email' => 'buidongtung@gmail.com',
                'content' => 'hayy',
                'id_news' => '8',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

        ]);
    }
}
