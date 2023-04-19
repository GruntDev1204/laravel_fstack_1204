<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewPost extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('add_posts')->delete();

        DB::table('add_posts')->truncate();

        DB::table('add_posts')->insert([
            ['id' => 1,'id_people' => 43, 'content' => 'I love u very much bro', 'img' => '/blog/img/user_img/test.jpg', 'action' => 0,  ],
            ['id' => 2,'id_people' => 46, 'content' => 'I love u too bro', 'img' => '/blog/img/user_img/test.jpg', 'action' => 1, ],
            ['id' => 3,'id_people' => 42, 'content' => 'I love u very much bro', 'img' => '/blog/img/user_img/test.jpg', 'action' => 0,  ],
            ['id' => 4,'id_people' => 46, 'content' => 'I love u too bro', 'img' => '/blog/img/user_img/test.jpg', 'action' => 1, ],
            ['id' => 5,'id_people' => 43, 'content' => 'I love u very much bro', 'img' => '/blog/img/user_img/test.jpg', 'action' => 0,  ],
            ['id' => 6,'id_people' => 46, 'content' => 'I love u too bro', 'img' => '/blog/img/user_img/test.jpg', 'action' => 1, ],
            ['id' => 7,'id_people' => 43, 'content' => 'I love u very much bro', 'img' => '/blog/img/user_img/test.jpg', 'action' => 0,  ],
            ['id' => 8,'id_people' => 42, 'content' => 'I love u too bro', 'img' => '/blog/img/user_img/test.jpg', 'action' => 1, ],


        ]);
    }
}
