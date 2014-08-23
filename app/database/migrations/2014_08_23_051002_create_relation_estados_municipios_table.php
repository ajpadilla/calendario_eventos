<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRelationEstadosMunicipiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('municipios', function(Blueprint $table)
		{
	        $table->integer('estado_id')->unsigned()->before('nombre'); 
           	$table->foreign('estado_id')
                ->references('id')          
                ->on('estados')
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
        Schema::table('municipios', function($table)
        {
            $table->dropForeign('municipios_estado_id_foreign');
            $table->dropColumn('estado_id');
        });
	}

}
