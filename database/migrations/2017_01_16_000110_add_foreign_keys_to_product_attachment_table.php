<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductAttachmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('product_attachment', function(Blueprint $table)
		{
			$table->foreign('attachment_id', 'attachment_product_relationship')->references('id')->on('attachments')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('product_id', 'product_attachment_relationship')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('product_attachment', function(Blueprint $table)
		{
			$table->dropForeign('attachment_product_relationship');
			$table->dropForeign('product_attachment_relationship');
		});
	}

}
