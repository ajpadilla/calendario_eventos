<?php

class AsignarRolTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('asignarrol')->truncate();

		$date = new DateTime;
		$asignar_roles[] = array(
			'user_id'=>'1',
			'role_id'=>'1',
			'created_at' => $date->format('Y-m-d h:m:s'),
			'updated_at' => $date->format('Y-m-d h:m:s')   
		);

		$asignar_roles[] = array(
			'user_id'=>'2',
			'role_id'=>'2',
			'created_at' => $date->format('Y-m-d h:m:s'),
			'updated_at' => $date->format('Y-m-d h:m:s')   
		);

		// Uncomment the below to run the seeder
		DB::table('assigned_roles')->insert($asignar_roles);
	}

}
