<?php

namespace App\Models;

use App\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wallet extends BaseModel
{
    use SoftDeletes;

    public $timestamps = true;

    protected $fillable = [
        'balance',
        'wallet_type',
        'store_name',
        'merchant_contract_id',
    ];

    //default values for attributes
    protected $guarded = ['wallet_type','balance'];
    protected $attributes = [
        'wallet_type' => 2,
    ];

    public function merchants()
    {
        return $this->hasMany(Merchant::class);
    }

    public function owner()
    {
        return $this->belongsTo(MerchantContract::class, 'merchant_contract_id');
    }

    protected static $rules = [
        'name'   => 'required',
    ];

}
