<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserRoleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_role', function(Blueprint $table)
		{
			$table->foreign('role_id', 'role_user_relation')->references('id')->on('roles')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('user_id', 'user_role_relation')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_role', function(Blueprint $table)
		{
			$table->dropForeign('role_user_relation');
			$table->dropForeign('user_role_relation');
		});
	}

}
