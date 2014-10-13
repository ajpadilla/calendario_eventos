<?php

// Composer: "fzaninotto/faker": "v1.4.0"

class MunicipiosTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        //DB::table('municipios')->truncate();

        $date = new DateTime;
        $municipios[] = array(
            'nombre' => 'San Cristóbal',
            'estado_id' => 1,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')            
        );  

        $municipios[] = array(
            'nombre' => 'Guasimos',
            'estado_id' => 1,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')            
        );          

        $municipios[] = array(
            'nombre' => 'Cardenas',
            'estado_id' => 1,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')            
        ); 
        
        $municipios[] = array(
            'nombre' => 'Ayacucho',
            'estado_id' => 1,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')            
        );             

        $municipios[] = array(
            'nombre' => 'Alberto Adriani',
            'estado_id' => 2,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')            
        ); 
        
        $municipios[] = array(
            'nombre' => 'Andrés Bello',
            'estado_id' => 2,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')            
        );             

        // Uncomment the below to run the seeder
        DB::table('municipios')->insert($municipios);
    }


}
