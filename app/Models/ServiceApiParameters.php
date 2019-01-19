<?php

namespace App\Models;

use App\BaseModel;

class ServiceApiParameters extends BaseModel
{
    protected $guarded = ['id'];

    protected static $rules = [
        'name'   => 'required',
    ];

    function getNameAttribute()
    {
        return json_decode($this->attributes['name'], true)[app()->getLocale()];
    }

    public function service_api()
    {
        return $this->belongsTo(ServiceApi::class);
    }
}
