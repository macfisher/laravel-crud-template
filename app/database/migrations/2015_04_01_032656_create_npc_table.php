<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNpcTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('npc', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->integer('energy');
			$table->integer('attack');
			$table->integer('hp');
			$table->string('status');
			$table->string('description');
			
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
		Schema::drop('npc');
	}

}
