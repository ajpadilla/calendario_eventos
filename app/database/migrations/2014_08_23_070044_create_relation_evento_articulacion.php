<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRelationEventoArticulacion extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('eventos', function(Blueprint $table)
		{
            $table->integer('articulacion_id')->unsigned()->before('nombre');
            $table->foreign('articulacion_id')
                    ->references('id')
                    ->on('articulaciones')
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
        $table->dropForeign('eventos_articulacion_id_foreign');
        $table->dropColumn('articulacion_id');

	}

}
