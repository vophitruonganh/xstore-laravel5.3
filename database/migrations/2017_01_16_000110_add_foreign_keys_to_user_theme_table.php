<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserThemeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_theme', function(Blueprint $table)
		{
			$table->foreign('site_id', 'site_user')->references('id')->on('sites')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('user_id', 'user_site')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('theme_id', 'user_theme')->references('id')->on('themes')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_theme', function(Blueprint $table)
		{
			$table->dropForeign('site_user');
			$table->dropForeign('user_site');
			$table->dropForeign('user_theme');
		});
	}

}
