<?php

namespace App\Models;

use App\BaseModel;

class Commission extends BaseModel
{
    protected $fillable = [
        'name' ,
        'commission_multi' ,
        'condition_data'
    ];

    protected $casts = [
        'condition_data' => 'array',
    ];

    function getNameAttribute()
    {
        return json_decode($this->attributes['name'], true)[app()->getLocale()];
    }
}
