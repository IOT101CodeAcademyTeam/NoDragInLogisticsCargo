<?php

namespace App\Models;

class IotDeviceData extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'iot_device_data';
    protected $hidden = ['id', 'deleted_at', 'infrared', 'running', 'gsm_signal_strength', 'satellites', 'battery_voltage'];

    /**
     * Fields which will be manipulated
     * @var array
     */

    protected $fillable = ['model_id','date','time','speed','temperature_a','humidity_a','running',
        'gsm_signal_strength','satellites','odometer_server','battery_voltage','latitude','longitude'];

    public function deviceConnData(){
        return $this->belongsToMany(IotDeviceData::class, 'iot_device_data_conn', 'data_id', 'device_imei');
    }
}
