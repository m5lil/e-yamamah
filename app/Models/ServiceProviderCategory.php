<?php

namespace App\Models;

use App\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceProviderCategory extends BaseModel
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'icon',
        'status',
        'order',
    ];

    function getNameAttribute()
    {
        return json_decode($this->attributes['name'], true)[app()->getLocale()];
    }

    protected $casts = [
        'name' => 'array',
    ];
    protected static $rules = array(
        'name.*'           => 'required',
    );

    public function service_providers()
    {
        return $this->hasMany(ServiceProvider::class, 'service_provider_category_id');
    }

}
