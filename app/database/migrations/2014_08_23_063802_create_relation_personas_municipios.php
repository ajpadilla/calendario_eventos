<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRelationPersonasMunicipios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('personas', function(Blueprint $table)
		{
	        $table->integer('municipio_id')->unsigned()->after('direccion');
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
        Schema::table('personas', function(Blueprint $table)
        {
            $table->dropForeign('personas_municipio_id_foreign');
            $table->dropColumn('municipio_id');
        });
	}

}
