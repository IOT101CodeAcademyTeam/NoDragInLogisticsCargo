<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class CoreModel extends Model
{
    use SoftDeletes;

    /**
     * Identifies that id will not be auto incrementing
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Function which automatically generates and adds UUID for model
     * if id is not set
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (!isset($model->attributes['id'])) {
                $model->attributes['id'] = Uuid::uuid4();
            } else {
                //TODO check if code will work without else statement
                $model->{$model->getKeyName()} = $model->attributes['id'];
            }
        });
    }
}
