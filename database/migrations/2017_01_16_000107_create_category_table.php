<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('category_extend_id')->unsigned()->nullable()->index('category_id');
			$table->string('name');
			$table->string('url');
			$table->text('image', 65535)->nullable();
			$table->boolean('active')->default(1);
			$table->timestamps();
			$table->index(['id','name'], 'category_name');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('category');
	}

}
