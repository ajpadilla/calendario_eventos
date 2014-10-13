<?php


class SubsistemasTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        //DB::table('subsistemas')->truncate();

        $date = new DateTime;
        $subsistemas[] = array(
            'nombre' => 'subsistema1',
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')            
        );  

        $subsistemas[] = array(
            'nombre' => 'subsistema2',
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')            
        );          

        $subsistemas[] = array(
            'nombre' => 'subsistema3',
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')            
        );              

        // Uncomment the below to run the seeder
        DB::table('subsistemas')->insert($subsistemas);
    }


}
