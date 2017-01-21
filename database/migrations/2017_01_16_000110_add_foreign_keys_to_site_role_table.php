<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSiteRoleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('site_role', function(Blueprint $table)
		{
			$table->foreign('role_id', 'role_site')->references('id')->on('roles')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('site_id', 'site_role')->references('id')->on('sites')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('site_role', function(Blueprint $table)
		{
			$table->dropForeign('role_site');
			$table->dropForeign('site_role');
		});
	}

}
