<?php

namespace App\Models;

class IotDeviceData extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'iot_device_data';
    protected $hidden = ['id', 'deleted_at', 'infrared', 'running', 'gsm_signal_strength', 'satellites', 'battery_voltage', 'created_at', 'updated_at'];

    /**
     * Fields which will be manipulated
     * @var array
     */

    protected $fillable = ['id','date','time','speed','temperature_a','humidity_a','running','model_id',
        'gsm_signal_strength','satellites','odometer_server','battery_voltage','latitude','longitude'];

    public function deviceConnData(){
        return $this->belongsToMany(IotDeviceData::class, 'iot_device_data_conn', 'device_imei', 'data_id');
    }
}
