<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	DB::table('users')->delete();

        $users = array(
            array(
                'username'    => 'Petar Borovcanin',
                'email'   => 'petar@ptt.yu',
                'password' => 'passowrd',
                'name' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
        );

        // Uncomment the below to run the seeder
         DB::table('users')->insert($users);
    }

}