<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNpcsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('npcs', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->string('name', 255);
			$table->integer('energy');
			$table->integer('attack');
			$table->integer('hp');
			$table->string('description', 255);
			$table->string('status', 255);
			
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('npcs');
	}

}
