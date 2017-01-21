<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserShipTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_ship', function(Blueprint $table)
		{
			$table->foreign('ship_id', 'ship_user')->references('id')->on('ship')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id', 'user_ship')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_ship', function(Blueprint $table)
		{
			$table->dropForeign('ship_user');
			$table->dropForeign('user_ship');
		});
	}

}
