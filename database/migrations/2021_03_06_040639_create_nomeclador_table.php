<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNomecladorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nomeclador', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('agru', 1)->nullable();
			$table->string('cod', 3)->nullable();
			$table->string('descripcion', 51)->nullable();
			$table->string('tipo_nomenclador', 10)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nomeclador');
	}

}
