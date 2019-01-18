<?php

namespace App\Models;

use App\BaseModel;

class TicketCategory extends BaseModel
{
    protected $fillable = ['name'];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    protected static $rules = [
        'name'   => 'required',
    ];

}
