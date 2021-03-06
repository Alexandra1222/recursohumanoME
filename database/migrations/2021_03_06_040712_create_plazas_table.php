<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlazasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plazas', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('tipo_plaza', 60)->nullable();
			$table->string('observaciones', 100)->nullable();
			$table->bigInteger('instituciones_id')->unsigned();
			$table->bigInteger('nomeclador_id')->unsigned();
			$table->bigInteger('pofs_id')->unsigned();
			

			$table->UnsignedBigInteger('instituciones_id');
            $table->UnsignedBigInteger('nomeclador_id');
            $table->UnsignedBigInteger('pofs_id');
            

            $table->foreign('instituciones_id')->references('id')->on('instituciones')->onDelete('cascade');
            $table->foreign('nomeclador_id')->references('id')->on('nomeclador')->onDelete('cascade');
			$table->foreign('pofs_id')->references('id')->on('pofs')->onDelete('cascade');
			
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
		Schema::drop('plazas');
	}

}
