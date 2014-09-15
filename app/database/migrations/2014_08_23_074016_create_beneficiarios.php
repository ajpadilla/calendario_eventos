<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBeneficiarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('beneficiarios', function(Blueprint $table)
		{
			$table->increments('id');
            $table->enum('tipo',array('estudiante','directivo','administrativo','docente','obrero'));
            $table->integer('evento_id')->unsigned();
            $table->integer('persona_id')->unsigned();
			$table->timestamps();
            $table->softdeletes();
            $table->unique(array('evento_id', 'persona_id'), 'beneficiarios_unique');
		});
        
        Schema::table('beneficiarios', function(Blueprint $table)
        {
            $table->foreign('evento_id')
                    ->references('id')
                    ->on('eventos')
                    ->onDelete('no action')
                    ->onUpdate('cascade');

            $table->foreign('persona_id')
                    ->references('id')
                    ->on('personas')
                    ->onDelete('no action')
                    ->onUpdate('cascade');  
        });

	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('beneficiarios');
	}

}
