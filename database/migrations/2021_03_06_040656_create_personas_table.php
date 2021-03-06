<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
			$table->integer('id', true);
			$table->integer('documento')->nullable();
			$table->string('tipo_doc', 3)->nullable();
			$table->string('apellido', 25)->nullable();
			$table->string('nombre', 20)->nullable();
			$table->string('fnac', 8)->nullable();
			$table->bigInteger('cuil')->nullable();
			$table->string('est_civil', 9)->nullable();
			$table->integer('anti_doc')->nullable();
			$table->integer('anti_adm')->nullable();
			$table->string('fec_i_doc', 8)->nullable();
			$table->string('fec_i_adm', 8)->nullable();
			$table->string('numero_telefono', 10)->nullable();
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
