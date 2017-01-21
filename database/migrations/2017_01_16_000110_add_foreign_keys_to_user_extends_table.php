<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserExtendsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_extends', function(Blueprint $table)
		{
			$table->foreign('id', 'user_extend_relationship')->references('user_extend_id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_extends', function(Blueprint $table)
		{
			$table->dropForeign('user_extend_relationship');
		});
	}

}
