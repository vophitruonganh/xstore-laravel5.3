<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDescriptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('description', function(Blueprint $table)
		{
			$table->foreign('product_id', 'description_product_relation')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('description', function(Blueprint $table)
		{
			$table->dropForeign('description_product_relation');
		});
	}

}
