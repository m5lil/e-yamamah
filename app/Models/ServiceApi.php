<?php

namespace App\Models;

use App\BaseModel;

class ServiceApi extends BaseModel
{
    protected $guarded = ['id'];

    protected static $rules = [
        'name'   => 'required',
    ];

}
