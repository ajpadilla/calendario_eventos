<?php

class RolTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('rol')->truncate();

		$date = new DateTime;
		$rol[] = array(
			'name' => 'Administrador',
			'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')     
		);

		$rol[] = array(
			'name' => 'Usuario',
			'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')     
		);

		// Uncomment the below to run the seeder
		DB::table('roles')->insert($rol);
	}

}
