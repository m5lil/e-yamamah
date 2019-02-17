<?php

namespace App\Models;

use App\BaseModel;
use Spatie\Activitylog\Traits\LogsActivity;

class Transaction extends BaseModel
{
    use LogsActivity;
    protected $guarded = ['id'];

    protected static $logAttributes = ['response_type','external_id'];
    protected static $logOnlyDirty = true;
    protected static $logName = 'transactions';
    protected $casts = [
        'request_map' => 'array',
    ];

    public function model(){
        return $this->morphTo();
    }


}
