<?php

class PostsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	 DB::table('posts')->delete();

        $posts = array(
            array(
                'post_title'    => 'Test Post',
                'post_body'   => 'Lorem ipsum Reprehenderit velit est irure in enim in magna aute occaecat qui velit ad.',
                'user_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'post_title'    => 'Test Post',
                'post_body'   => 'Lorem ipsum Reprehenderit velit est irure in enim in magna aute occaecat qui velit ad.',
                'user_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
        );

        // Uncomment the below to run the seeder
         DB::table('posts')->insert($posts);
    }

}