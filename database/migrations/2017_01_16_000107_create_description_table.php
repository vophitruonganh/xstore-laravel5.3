<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDescriptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('description', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('product_id')->unsigned()->unique('product_id');
			$table->string('color')->nullable();
			$table->string('size', 100)->nullable();
			$table->string('resolution', 150)->nullable();
			$table->string('ram', 150)->nullable();
			$table->string('cpu', 150)->nullable();
			$table->string('sdcard', 150)->nullable();
			$table->string('ssd', 150)->nullable();
			$table->string('hdd', 150)->nullable();
			$table->string('screen_size', 100)->nullable();
			$table->string('camera_before', 100)->nullable();
			$table->string('camera_after', 100)->nullable();
			$table->string('os', 100)->nullable();
			$table->integer('strorage')->nullable();
			$table->string('wifi', 100)->nullable();
			$table->string('2g', 100)->nullable();
			$table->string('3g', 100)->nullable();
			$table->string('4g', 100)->nullable();
			$table->string('sim_number', 100)->nullable();
			$table->string('sim_type', 100)->nullable();
			$table->string('gps', 100)->nullable();
			$table->string('bluetooth', 100)->nullable();
			$table->string('nfc', 100)->nullable();
			$table->string('battery', 100)->nullable();
			$table->string('battery_size', 100)->nullable();
			$table->string('more', 100)->nullable();
			$table->string('headphone', 100)->nullable();
			$table->string('headphone_type', 100)->nullable();
			$table->string('radio', 100)->nullable();
			$table->string('recocde', 100)->nullable();
			$table->string('connect_extends')->nullable();
			$table->string('camera_flash', 100)->nullable();
			$table->string('monitor', 100)->nullable();
			$table->string('usb2', 100)->nullable();
			$table->string('usb3', 100)->nullable();
			$table->string('vga_onboard')->nullable();
			$table->string('monitor_output')->nullable();
			$table->string('monitor_input')->nullable();
			$table->string('sound')->nullable();
			$table->string('bus', 100)->nullable();
			$table->string('vga_extends')->nullable();
			$table->string('dvd', 150)->nullable();
			$table->string('weight', 100)->nullable();
			$table->text('meta')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('description');
	}

}
