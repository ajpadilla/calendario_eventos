<?php


class ImpactosTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        //DB::table('impactos')->truncate();

        $date = new DateTime;
        $impactos[] = array(
            'nombre' => 'Impacto1',
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')            
        );  

        $impactos[] = array(
            'nombre' => 'Impacto2',
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')            
        );          

        $impactos[] = array(
            'nombre' => 'Impacto3',
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')            
        );              

        // Uncomment the below to run the seeder
        DB::table('impactos')->insert($impactos);
    }

	

}
