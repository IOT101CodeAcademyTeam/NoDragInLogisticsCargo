<?php

namespace App\Models;

class IotDevice extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'iot_device';


    /**
     * Fields which will be manipulated
     * @var array
     */

    protected $fillable = ['imei','name','id'];

    protected $hidden = ['deleted_at', 'pivot'];


    public function deviceConnData(){
        return $this->belongsToMany(IotDeviceData::class, 'iot_device_data_conn', 'device_imei', 'data_id');
    }
}