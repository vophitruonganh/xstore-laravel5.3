<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductsExtendsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('products_extends', function(Blueprint $table)
		{
			$table->foreign('id', 'product_extend_relationship')->references('product_extend_id')->on('products')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('products_extends', function(Blueprint $table)
		{
			$table->dropForeign('product_extend_relationship');
		});
	}

}
