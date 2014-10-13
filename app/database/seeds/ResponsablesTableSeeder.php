<?php

class ResponsablesTableSeeder extends Seeder {

    public function run()
    {
        $date = new DateTime;
        
        $responsables[] = array(
            'evento_id' => 1,
            'persona_id' => 1,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')    
        );
        
         
        $responsables[] = array(
            'evento_id' => 1,
            'persona_id' => 2,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')    
        );
    
         
        $responsables[] = array(
            'evento_id' => 1,
            'persona_id' => 3,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')    
        );

        $responsables[] = array(
            'evento_id' => 2,
            'persona_id' => 4,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')    
        );
        
        $responsables[] = array(
            'evento_id' => 2,
            'persona_id' => 5,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')    
        );
        
        $responsables[] = array(
            'evento_id' => 2,
            'persona_id' => 6,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')    
        );

        // Uncomment the below to run the seeder
        DB::table('responsables')->insert($responsables);
    }

}