<?php


class PersonasTableSeeder extends Seeder {

    public function run()
    {
        $date = new DateTime;

        $personas[] = array(
            'cedula' => '19234099',
            'nombres' => 'Alvaro Jose',
            'apellidos'=>'Padilla Bustamante',
            'nacionalidad'=>'v',
            'sexo'=>'m',
            'direccion'=>'Av 19 de abril',
            'telefono'=>'041613402017',
            'email'=>'ajpadilla88@gmail.com',
            'municipio_id'=>1,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')    
        );

          $personas[] = array(
            'cedula' => '18990567',
            'nombres' => 'Paul Lenyn',
            'apellidos'=>'Cuao Alcantara',
            'nacionalidad'=>'v',
            'sexo'=>'m',
            'direccion'=>'Unidad Vecinal',
            'telefono'=>'04161234567',
            'email'=>'lenyn8888@gmail.com',
            'municipio_id'=>1,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')    
        );

          $personas[] = array(
            'cedula' => '19234100',
            'nombres' => 'Giancarlo Jose    ',
            'apellidos'=>'Vargas Molida',
            'nacionalidad'=>'v',
            'sexo'=>'m',
            'direccion'=>'Palo Gordo',
            'telefono'=>'041613402017',
            'email'=>'giancarlo88@gmail.com',
            'municipio_id'=>1,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')    
        );
        
        
          $personas[] = array(
            'cedula' => '19975245',
            'nombres' => 'Eduardo Javier',
            'apellidos'=>'Carrillo Frechon',
            'nacionalidad'=>'v',
            'sexo'=>'m',
            'direccion'=>'Av Lucioquendo',
            'telefono'=>'041613402017',
            'email'=>'Edueardo88@gmail.com',
            'municipio_id'=>1,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')    
        );

        $personas[] = array(
            'cedula' => '19234098',
            'nombres' => 'Yerismel Amanda',
            'apellidos'=>'Padilla Bustamante',
            'nacionalidad'=>'v',
            'sexo'=>'f',
            'direccion'=>'Colòn',
            'telefono'=>'041613402017',
            'email'=>'yerismel88@gmail.com',
            'municipio_id'=>4,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')    
        );
        
         $personas[] = array(
            'cedula' => '19234000',
            'nombres' => 'Glendy Kiraly',
            'apellidos'=>'Padilla Bustamante',
            'nacionalidad'=>'v',
            'sexo'=>'f',
            'direccion'=>'Av 19 de avril',
            'telefono'=>'041613402017',
            'email'=>'gelndy88@gmail.com',
            'municipio_id'=>1,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')    
        );
        
        // Uncomment the below to run the seeder
        DB::table('personas')->insert($personas);        
    
    }

}
