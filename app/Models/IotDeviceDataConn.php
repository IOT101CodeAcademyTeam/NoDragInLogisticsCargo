<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IotDeviceDataConn extends Model
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'iot_device_data_conn';

    /**
     * Fields which will be manipulated
     * @var array
     */
    protected $fillable = ['device_imei', 'data_id'];
}
