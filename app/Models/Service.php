<?php

namespace App\Models;

use App\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends BaseModel
{
    use SoftDeletes;

    protected $fillable = [
        'sdk_id',
        'service_provider_id',
        'commission_id',
        'output',
        'name',
        'request_amount',
        'status',
        'icon',
        'order',
    ];

    function getNameAttribute()
    {
        return json_decode($this->attributes['name'], true)[app()->getLocale()];
    }

    protected $casts = [
        'output' => 'array',
        'name' => 'array',
    ];

    public function newQuery() {
        return parent::newQuery()
            ->where('status', '=', 1);
    }


    public function sdk()
    {
        return $this->belongsTo(SDK::class);
    }

    public function service_provider()
    {
        return $this->belongsTo(ServiceProvider::class);
    }

    public function service_api()
    {
        return $this->hasMany(ServiceApi::class);
    }



    protected static $rules = [
        'name'   => 'required',
    ];

}
