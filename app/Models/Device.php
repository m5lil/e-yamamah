<?php

namespace App\Models;

use App\BaseModel;

class Device extends BaseModel
{
    protected $fillable = [
        'merchant_id' ,
        'device_token' ,
        'device_version' ,
        'device_model' ,
        'device_serial' ,
        'updated_at' ,
    ];

    public function merchant(){
        return $this->belongsTo(Merchant::class , 'merchant_id');
    }

    protected static $rules = [
        'name'   => 'required',
    ];

}
