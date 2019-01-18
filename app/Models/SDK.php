<?php

namespace App\Models;

use App\BaseModel;

class SDK extends BaseModel
{
    protected $table = 'sdks';
    protected $guarded = ['id'];

    protected static $rules = [
        'name'   => 'required',
    ];

}
