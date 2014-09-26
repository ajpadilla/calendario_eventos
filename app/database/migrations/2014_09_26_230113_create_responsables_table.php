<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsablesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('responsables', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('evento_id')->unsigned();
            $table->integer('persona_id')->unsigned();
			$table->timestamps();
            $table->softdeletes();
            $table->unique(array('evento_id', 'persona_id'), 'responsables_unique');
		});
        
        Schema::table('responsables', function(Blueprint $table)
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
		Schema::drop('responsables');
	}

}
