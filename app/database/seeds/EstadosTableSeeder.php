<?php

// Composer: "fzaninotto/faker": "v1.4.0"

class EstadosTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        //DB::table('estados')->truncate();

        $date = new DateTime;
        $estados[] = array(
            'nombre' => 'Táchira',
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')            
        );  

        $estados[] = array(
            'nombre' => 'Mérida',
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')            
        );              

        // Uncomment the below to run the seeder
        DB::table('estados')->insert($estados);
    }
    
	
}
