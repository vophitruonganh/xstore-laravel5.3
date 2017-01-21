<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrderProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('order_product', function(Blueprint $table)
		{
			$table->foreign('order_id', 'order_product')->references('id')->on('orders')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('product_id', 'product_order')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('order_product', function(Blueprint $table)
		{
			$table->dropForeign('order_product');
			$table->dropForeign('product_order');
		});
	}

}
