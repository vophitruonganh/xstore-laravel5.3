<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrademarkExtendsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trademark_extends', function(Blueprint $table)
		{
			$table->foreign('id', 'trademark_extend')->references('trademark_extend_id')->on('trademarks')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trademark_extends', function(Blueprint $table)
		{
			$table->dropForeign('trademark_extend');
		});
	}

}
