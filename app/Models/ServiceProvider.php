<?php

namespace App\Models;

use App\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceProvider extends BaseModel
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'icon',
        'status',
        'order',
        'service_provider_category_id',
    ];

    function getNameAttribute()
    {
        return json_decode($this->attributes['name'], true)[app()->getLocale()];
    }

    protected $casts = [
        'name' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(ServiceProviderCategory::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    protected static $rules = [
        'name'   => 'required',
    ];

}
