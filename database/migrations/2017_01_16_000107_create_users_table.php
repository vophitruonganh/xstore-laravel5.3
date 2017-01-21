<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('user_extend_id')->unsigned()->nullable()->index('user_extend_relationship');
			$table->bigInteger('role_id')->unsigned()->default(1)->index('role_id');
			$table->bigInteger('district_id')->unsigned()->nullable()->default(1);
			$table->string('firstname', 50)->nullable();
			$table->string('lastname', 50)->nullable();
			$table->date('dob');
			$table->string('address');
			$table->string('idcard', 9)->nullable();
			$table->string('email')->index('email');
			$table->string('password');
			$table->string('phone', 16)->nullable();
			$table->boolean('sex')->nullable();
			$table->boolean('status')->default(0);
			$table->boolean('active')->default(0);
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
