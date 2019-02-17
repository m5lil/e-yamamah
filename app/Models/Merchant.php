<?php

namespace App\Models;

use App\Events\MerchantRegistered;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Spatie\Activitylog\Traits\CausesActivity;

class Merchant extends Authenticatable
{
    use HasApiTokens, Notifiable, CausesActivity;

    protected $guard_name = 'merchant';
    public $table = "merchants";
    protected $dates = ['deleted_at', 'last_login_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email', 'phone', 'username', 'password', 'status', 'wallet_id', 'merchant_contract_id', 'change_password', 'language_key', 'verified_at', 'last_login_at', 'last_login_ip',
    ];

    public function setPasswordAttribute($value)
    {
        if ($value)
            if (\Hash::needsRehash($value))
                $value = \Hash::make($value);
        $this->attributes['password'] = $value;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->username = '1' . str_pad(MerchantContract::find($model->merchant_contract_id)->area_id, 2, 0, STR_PAD_LEFT)
                . (@$model->latest()->first()->id + 1);
            session(['password' => rand(111111, 999999)]);
            $model->password = session()->get('password');
            $model->change_password = 1;
            if ($model->status == 1)
                $model->verified_at = Carbon::now();
            if (empty($model->email))
                $model->email = $model->name . '@e-yamamah.com';
            event(new MerchantRegistered($model));
        });
    }

    function getOwnerAttribute()
    {
        if ($this->attributes['owner'])
            return self::find($this->attributes['owner'])->id;
        else
            return 'غير تابع لأحد';
    }

    public function wallet()
    {
        return $this->belongsTo('App\Models\Wallet', 'merchant_id');
    }

    public function merchant_contract()
    {
        return $this->belongsTo('App\Models\MerchantContract', 'merchant_contract_id');
    }

    public function logs()
    {
        return $this->morphMany('App\Models\Log', 'loggable');
    }

    public function PaymentTransactions()
    {
        return $this->morphMany('App\Models\Transaction', 'model');
    }

}
