<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductTrademarkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('product_trademark', function(Blueprint $table)
		{
			$table->foreign('product_id', 'product_trademark_relationship')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('trademark_id', 'trademark_product_relationship')->references('id')->on('trademarks')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('product_trademark', function(Blueprint $table)
		{
			$table->dropForeign('product_trademark_relationship');
			$table->dropForeign('trademark_product_relationship');
		});
	}

}
