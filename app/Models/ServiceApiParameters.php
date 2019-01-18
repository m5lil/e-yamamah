<?php

namespace App\Models;

use App\BaseModel;

class ServiceApiParameters extends BaseModel
{
    protected $guarded = ['id'];

    protected static $rules = [
        'name'   => 'required',
    ];

}
