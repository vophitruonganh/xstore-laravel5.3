<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('product_category', function(Blueprint $table)
		{
			$table->foreign('category_id', 'category_product_relationship')->references('id')->on('category')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('product_id', 'product_category__relationship')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('product_category', function(Blueprint $table)
		{
			$table->dropForeign('category_product_relationship');
			$table->dropForeign('product_category__relationship');
		});
	}

}
