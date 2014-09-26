<?php

// Composer: "fzaninotto/faker": "v1.4.0"

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$date = new DateTime;
		$usuarios [] = array(
            'username' => 'ajpadilla',
            'password'=> Hash::make('1234'),
            'email'    => 'chris@example.com',
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')            
        );  

		// Uncomment the below to run the seeder
        DB::table('users')->insert($usuarios);
	}

}
