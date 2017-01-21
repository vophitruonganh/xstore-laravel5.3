<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserDistrictTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_district', function(Blueprint $table)
		{
			$table->foreign('district_id', 'district_user')->references('id')->on('districts')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('user_id', 'user_district')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_district', function(Blueprint $table)
		{
			$table->dropForeign('district_user');
			$table->dropForeign('user_district');
		});
	}

}
