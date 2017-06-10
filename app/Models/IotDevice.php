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

    protected $hidden = ['deleted_at'];
}