<?php

namespace App\Models;

use App\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class MerchantContract extends BaseModel
{
    public $timestamps = true;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'image',
        'phone',
        'bd',
        'status',
        'is_reseller',
        'parent_id',
        'merchant_category_id',
        'nationality_id',
        'id_image_f',
        'id_image_b',
        'area_id',
        'address'
    ];

    public static function boot()
    {
        parent::boot();
        self::deleted(function ($model) {
            $model->wallets->first()->delete();
        });
    }

    protected static $rules = array(
        'name'           => 'required',
        'email'          => 'required|email|unique:merchant_contracts,email',
        'phone'          => 'required|numeric|unique:merchant_contracts,phone',
//        'image'          => 'required|file|mimes:jpeg,bmp,png',
        'bd'             => 'required|date',
        'nationality_id' => 'required|numeric|digits:14',
//        'id_image_f'     => 'required|file|mimes:jpeg,bmp,png',
//        'id_image_b'     => 'required|file|mimes:jpeg,bmp,png',
        'area_id'        => 'required|exists:areas,id',
        'address'        => 'required',
    );

    public function wallets()
    {
        return $this->hasMany('App\Model\wallet');
    }

    public function category()
    {
        return $this->belongsTo('App\Model\MerchantCategory', 'merchant_category_id');
    }

    public function merchants()
    {
        return $this->hasMany('App\Model\Merchant', 'merchant_contract_id');
    }

    public function reseller()
    {
        return $this->belongsTo('App\Model\Merchant', 'parent_id');
    }

}
