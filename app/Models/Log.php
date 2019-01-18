<?php

namespace App\Models;

use App\BaseModel;

class Log extends BaseModel
{
    protected $guarded = ['id'];

    protected static $rules = [
        'name'   => 'required',
    ];

}
