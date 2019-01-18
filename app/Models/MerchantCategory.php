<?php

namespace App\Models;

use App\BaseModel;

class MerchantCategory extends BaseModel
{
    protected $table = 'merchant_categories';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'status',
    ];

    public function merchants()
    {
        return $this->hasMany('App\Model\Contract');
    }

}
