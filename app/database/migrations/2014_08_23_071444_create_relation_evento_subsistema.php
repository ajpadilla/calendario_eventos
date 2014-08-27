<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRelationEventoSubsistema extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('eventos', function(Blueprint $table)
		{
            $table->integer('subsistema_id')->unsigned()->after('impacto_id');
            $table->foreign('subsistema_id')
                  ->references('id')
                  ->on('subsistemas')
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
		Schema::table('eventos', function(Blueprint $table){
        	$table->dropForeign('eventos_subsistema_id_foreign');
        	$table->dropColumn('subsistema_id');
		});

	}

}
