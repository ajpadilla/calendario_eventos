<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRelationEventoImpacto extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('eventos', function(Blueprint $table)
		{
            $table->integer('impacto_id')->unsigned()->after('articulacion_id');
            $table->foreign('impacto_id')
                  ->references('id')
                  ->on('impactos')
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
        $table->dropForeign('eventos_impacto_id_foreign');
        $table->dropColumn('impacto_id');

	}

}
