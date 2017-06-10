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
			$table->string('speed')->nullable();
			$table->string('temperature_a')->nullable();
			$table->string('humidity_a')->nullable();
			$table->string('running')->nullable();
			$table->string('gsm_signal_strength')->nullable();
			$table->string('satellites')->nullable();
			$table->string('odometer_server')->nullable();
			$table->string('battery_voltage')->nullable();
			$table->string('latitude')->nullable();
			$table->string('longitude')->nullable();
			$table->string('infrared')->nullable();
            $table->string('model_id', 36);
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
