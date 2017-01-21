<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiscountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('discounts', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('hot')->nullable()->default(0);
			$table->text('content', 65535)->nullable();
			$table->integer('type')->unsigned()->nullable();
			$table->float('take', 10, 0)->nullable();
			$table->float('over', 10, 0)->nullable();
			$table->dateTime('start')->nullable();
			$table->dateTime('end')->nullable();
			$table->dateTime('start_limit')->nullable();
			$table->dateTime('end_limit')->nullable();
			$table->boolean('active')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('discounts');
	}

}
