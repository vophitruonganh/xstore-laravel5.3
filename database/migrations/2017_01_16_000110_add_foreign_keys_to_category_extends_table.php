<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCategoryExtendsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('category_extends', function(Blueprint $table)
		{
			$table->foreign('id', 'category_extend')->references('category_extend_id')->on('category')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('category_extends', function(Blueprint $table)
		{
			$table->dropForeign('category_extend');
		});
	}

}
