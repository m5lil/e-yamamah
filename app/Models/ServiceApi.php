<?php

namespace App\Models;

use App\BaseModel;

class ServiceApi extends BaseModel
{
    protected $guarded = ['id'];

    protected static $rules = [
        'name'   => 'required',
    ];


    public function service_api_pars()
    {
        return $this->hasMany(ServiceApiParameters::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }





}
