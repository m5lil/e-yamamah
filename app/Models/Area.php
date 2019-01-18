<?php

namespace App\Models;

use App\BaseModel;

class Area extends BaseModel
{
    protected $fillable = [
        'name',
        'area_type',
        'parent_id'
    ];

    public function parent()
    {
        return $this->belongsTo(Area::class, 'parent_id');
    }

    public function childs()
    {
        return $this->hasmany(Area::class, 'parent_id');
    }
}
