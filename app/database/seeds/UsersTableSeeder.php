<?php

// Composer: "fzaninotto/faker": "v1.4.0"

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$date = new DateTime;
		$usuarios [] = array(
            'username' => 'christopher.pitt',
            'password'=> Hash::make('7h3¡MOST!53cu23'),
            'email'    => 'chris@example.com',
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')            
        );  

		// Uncomment the below to run the seeder
        DB::table('users')->insert($usuarios);
	}

}
