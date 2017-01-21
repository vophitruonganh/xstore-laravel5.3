<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCategoryAttachmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('category_attachment', function(Blueprint $table)
		{
			$table->foreign('attachment_id', 'attachment_categor')->references('id')->on('attachments')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('category_id', 'category_attachment')->references('id')->on('category')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('category_attachment', function(Blueprint $table)
		{
			$table->dropForeign('attachment_categor');
			$table->dropForeign('category_attachment');
		});
	}

}
