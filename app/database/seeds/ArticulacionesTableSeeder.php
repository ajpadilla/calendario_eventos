<?php


class ArticulacionesTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        //DB::table('articulaciones')->truncate();

        $date = new DateTime;
        $articulaciones[] = array(
            'nombre' => 'Articulaón1',
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')            
        );  

        $articulaciones[] = array(
            'nombre' => 'Articulaón2',
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')            
        );          

        $articulaciones[] = array(
            'nombre' => 'Articulaón3',
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')            
        );              

        // Uncomment the below to run the seeder
        DB::table('articulaciones')->insert($articulaciones);
    }

	
}
