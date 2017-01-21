<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductDiscountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('product_discount', function(Blueprint $table)
		{
			$table->foreign('discount_id', 'discount_product')->references('id')->on('discounts')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('product_id', 'product_discount')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('product_discount', function(Blueprint $table)
		{
			$table->dropForeign('discount_product');
			$table->dropForeign('product_discount');
		});
	}

}
