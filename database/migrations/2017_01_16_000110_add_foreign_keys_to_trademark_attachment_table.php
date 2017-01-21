<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrademarkAttachmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trademark_attachment', function(Blueprint $table)
		{
			$table->foreign('attachment_id', 'attachment_trademark')->references('id')->on('attachments')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('trademark_id', 'trademark_attachment')->references('id')->on('trademarks')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trademark_attachment', function(Blueprint $table)
		{
			$table->dropForeign('attachment_trademark');
			$table->dropForeign('trademark_attachment');
		});
	}

}
