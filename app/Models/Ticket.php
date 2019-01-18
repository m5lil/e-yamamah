<?php

namespace App\Models;

use App\BaseModel;

class Ticket extends BaseModel
{
    protected $fillable = [
        'user_id', 'category_id', 'ticket_id', 'title', 'priority', 'message', 'status'
    ];


    public function category()
    {
        return $this->belongsTo(TicketCategory::class);
    }

    protected static $rules = [
        'name'   => 'required',
    ];

}
