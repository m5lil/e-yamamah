<?php

namespace App\Models;

use App\BaseModel;

class ServiceApi extends BaseModel
{
    protected $guarded = ['id'];

    protected static $rules = [
        'name'   => 'required',
    ];

    function getNameAttribute()
    {
        return __("merchant/services.{$this->service_type}");
    }

    public function parameters()
    {
        return $this->hasMany(ServiceApiParameters::class);
    }
}
