<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnFromIotDeviceDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('iot_device_data', function (Blueprint $table) {
            $table->dropColumn('device_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('iot_device_data', function (Blueprint $table) {
            $table->string('device_id', 36);
        });
    }
}
