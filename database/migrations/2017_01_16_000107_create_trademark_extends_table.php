<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrademarkExtendsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trademark_extends', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('meta_key', 150);
			$table->text('meta_value', 65535)->nullable();
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
		Schema::drop('trademark_extends');
	}

}
