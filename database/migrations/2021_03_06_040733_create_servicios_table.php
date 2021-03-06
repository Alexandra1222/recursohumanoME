<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servicios', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('tipo_servicio', 60)->nullable();
			$table->string('observaciones', 100)->nullable();
			$table->string('fecha_inicio', 8)->nullable();
			$table->string('fecha_fin', 8)->nullable();
			$table->bigInteger('personas_id')->unsigned();
			$table->bigInteger('plazas_id')->unsigned();
			
			$table->UnsignedBigInteger('personas_id');
            $table->UnsignedBigInteger('plazas_id');
            

            //foraneas de personas y plazas
            $table->foreign('personas_id')->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('plazas_id')->references('id')->on('plazas')->onDelete('cascade');
			
			$table->timestamps(10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servicios');
	}

}
