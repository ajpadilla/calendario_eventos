<?php


class BeneficiariosTableSeeder extends Seeder {

	public function run()
	{
        $date = new DateTime;
        
        $beneficiarios[] = array(
            'tipo'=>'estudiante',
            'evento_id' => 1,
            'persona_id' => 1,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')    
        );
        
         
        $beneficiarios[] = array(
            'tipo'=>'directivo',
            'evento_id' => 1,
            'persona_id' => 2,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')    
        );
    
         
        $beneficiarios[] = array(
            'tipo'=>'administrativo',
            'evento_id' => 1,
            'persona_id' => 3,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')    
        );

        $beneficiarios[] = array(
            'tipo'=>'docente',
            'evento_id' => 1,
            'persona_id' => 4,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')    
        );
        
        $beneficiarios[] = array(
            'tipo'=>'obrero',
            'evento_id' => 1,
            'persona_id' => 5,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')    
        );
        
        $beneficiarios[] = array(
            'tipo'=>'estudiante',
            'evento_id' => 1,
            'persona_id' => 6,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')    
        );

        // Uncomment the below to run the seeder
        DB::table('beneficiarios')->insert($beneficiarios);
	}

}
