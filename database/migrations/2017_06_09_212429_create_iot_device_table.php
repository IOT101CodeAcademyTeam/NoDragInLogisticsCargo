<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIotDeviceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('iot_device', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->timestamps();
			$table->softDeletes();
			$table->string('imei')->unique('imei_UNIQUE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iot_device');
	}

}
