<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('cedula', 12)->unique();
			$table->string('nombres', 128);
			$table->string('apellidos', 128);
			$table->enum('nacionalidad', array('e','v'));
			$table->enum('sexo',array('m','f'));
			$table->text('direccion');
			$table->string('telefono', 15)->nullable(true)->default(null);
			$table->string('email', 60)->nullable(true)->default(null);
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personas');
	}

}
