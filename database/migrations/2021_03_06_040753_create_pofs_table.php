<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePofsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pofs', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('escuela', 200);
			$table->string('localidad', 200);
			$table->string('departamento', 200);
			$table->string('categoria', 200);
			$table->string('cargo_funcion', 200);
			$table->string('apellido_y_nombre_del_agente', 100);
			$table->string('dni_del_agente', 100);
			$table->string('antiguedad', 100);
			$table->string('origen_del_cargo_modalidad_de_contratacion', 200);
			$table->string('observaciones', 300);
			$table->string('ultimo_nivel_formación_concluido', 100);
			$table->string('numero_de_telefono', 100);
			$table->string('fecha_carga', 8)->nullable();
			$table->enum('estado', array('1','2'))->default('1');
			$table->bigInteger('instituciones_id')->unsigned();
			$table->bigInteger('users_id')->unsigned();
			$table->timestamps(10);



			$table->UnsignedBigInteger('instituciones_id');
            $table->UnsignedBigInteger('users_id');
            

            //foraneas de personas y plazas
            $table->foreign('instituciones_id')->references('id')->on('instituciones')->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pofs');
	}

}
