<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('product_extend_id')->unsigned()->nullable()->unique('product_extend_id');
			$table->string('name');
			$table->string('url')->nullable();
			$table->float('price', 10, 0)->nullable()->default(0);
			$table->integer('count')->nullable()->default(0);
			$table->boolean('sale')->nullable()->default(0);
			$table->boolean('status')->nullable()->default(0);
			$table->boolean('active')->nullable()->default(0);
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
		Schema::drop('products');
	}

}
