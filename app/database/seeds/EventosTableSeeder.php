<?php


class EventosTableSeeder extends Seeder {

public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        //DB::table('eventos')->truncate();

        $date = new DateTime;
        $eventos[] = array(
            'title' => 'Evento1',
            'actividad'=>'Primera actividad',
            'descripcion' => 'Primer evento',
            'start'=>$date->format('2014-09-14 10:00:00'),
            'direccion'=>'Tariba',
            'observacion'=>'Fiesta',
            'estatus'=>'Pendiente',
            'articulacion_id'=>1,
            'impacto_id'=>1,
            'subsistema_id'=>1,
            'municipio_id'=>1,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')            
        );  
        
          $eventos[] = array(
            'title' => 'Evento2',
            'actividad'=>'Segunda actividad',
            'descripcion' => 'Segundo evento',
            'start'=>$date->format('2014-09-15 10:00:00'),
            'direccion'=>'San Cristobal',
            'observacion'=>'Fiesta',
            'estatus'=>'Realizado',
            'articulacion_id'=>1,
            'impacto_id'=>1,
            'subsistema_id'=>1,
            'municipio_id'=>1,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')            
        );  
        
          $eventos[] = array(
            'title' => 'Evento3',
            'actividad'=>'Tercera actividad',
            'descripcion' => 'Tercer evento',
            'start'=>$date->format('2014-09-16 10:00:00'),
            'direccion'=>'Michelena',
            'observacion'=>'Fiesta',
            'estatus'=>'No realizado',
            'articulacion_id'=>2,
            'impacto_id'=>2,
            'subsistema_id'=>2,
            'municipio_id'=>1,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')            
        );  

        $eventos[] = array(
            'title' => 'Evento3',
            'actividad'=>'Tercera actividad',
            'descripcion' => 'Tercer evento',
            'start'=>$date->format('2014-09-16 10:00:00'),
            'direccion'=>'Michelena',
            'observacion'=>'Fiesta',
            'estatus'=>'Modificado',
            'articulacion_id'=>2,
            'impacto_id'=>2,
            'subsistema_id'=>2,
            'municipio_id'=>1,
            'created_at' => $date->format('Y-m-d h:m:s'),
            'updated_at' => $date->format('Y-m-d h:m:s')            
        );  

        // Uncomment the below to run the seeder
        DB::table('eventos')->insert($eventos);
    }


}
