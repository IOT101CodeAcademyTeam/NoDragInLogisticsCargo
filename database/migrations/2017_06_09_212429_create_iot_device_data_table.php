<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIotDeviceDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('iot_device_data', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->date('date');
			$table->time('time');
			$table->integer('speed')->nullable();
			$table->string('temperature_a')->nullable();
			$table->float('humidity_a', 10, 0)->nullable();
			$table->integer('running')->nullable();
			$table->integer('gsm_signal_strength')->nullable();
			$table->integer('satellites')->nullable();
			$table->string('odometer_server')->nullable();
			$table->integer('battery_voltage')->nullable();
			$table->string('latitude')->nullable();
			$table->string('longitude')->nullable();
			$table->string('infrared')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iot_device_data');
	}

}
