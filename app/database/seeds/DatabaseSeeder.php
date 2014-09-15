<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		 $this->call('ArticulacionesTableSeeder');
		 $this->call('SubsistemasTableSeeder');
		 $this->call('ImpactosTableSeeder');
		 $this->call('EstadosTableSeeder');
		 $this->call('MunicipiosTableSeeder');
		 $this->call('EventosTableSeeder');
		 $this->call('PersonasTableSeeder');
		 $this->call('BeneficiariosTableSeeder');
        
	}

}
