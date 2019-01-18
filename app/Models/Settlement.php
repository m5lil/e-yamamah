<?php

namespace App\Models;

use App\BaseModel;

class Settlement extends BaseModel
{
    protected $guarded = ['id'];

    protected static $rules = [
        'name'   => 'required',
    ];

}
