<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAttachmentThemeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('attachment_theme', function(Blueprint $table)
		{
			$table->foreign('attachment_id', 'attachment_theme')->references('id')->on('attachments')->onUpdate('CASCADE')->onDelete('RESTRICT');
			$table->foreign('theme_id', 'theme_attachment')->references('id')->on('themes')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('attachment_theme', function(Blueprint $table)
		{
			$table->dropForeign('attachment_theme');
			$table->dropForeign('theme_attachment');
		});
	}

}
