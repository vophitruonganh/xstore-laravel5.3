<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductTrademarkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_trademark', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('product_id')->unsigned()->nullable()->unique('product_trademark_relationship');
			$table->bigInteger('trademark_id')->unsigned()->nullable()->index('trademark_product_relationship');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_trademark');
	}

}
