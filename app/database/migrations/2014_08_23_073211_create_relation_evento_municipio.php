<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRelationEventoMunicipio extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('eventos', function(Blueprint $table)
		{
            $table->integer('municipio_id')->unsigned()->before('subsistema_id');
            $table->foreign('municipio_id')
                      ->references('id')
                      ->on('municipios')
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
        $table->dropForeign('eventos_municipio_id_foreign');
        $table->dropColumn('municipio_id');
	}

}
