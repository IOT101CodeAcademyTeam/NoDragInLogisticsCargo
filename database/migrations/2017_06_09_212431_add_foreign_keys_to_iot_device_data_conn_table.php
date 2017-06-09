<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIotDeviceDataConnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('iot_device_data_conn', function(Blueprint $table)
		{
			$table->foreign('device_imei', 'fk_iot_device_data_conn_iot_device1')->references('imei')->on('iot_device')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('data_id', 'fk_iot_device_data_conn_iot_device_data')->references('id')->on('iot_device_data')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('iot_device_data_conn', function(Blueprint $table)
		{
			$table->dropForeign('fk_iot_device_data_conn_iot_device1');
			$table->dropForeign('fk_iot_device_data_conn_iot_device_data');
		});
	}

}
