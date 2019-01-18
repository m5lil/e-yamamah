<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Staff extends Authenticatable
{
    use Notifiable, HasRoles;
    protected $guard_name = 'staff';
    protected $attributes = [
        'group_id' => 1,
    ];

    public $table = "staff";


    public function setPasswordAttribute( $value ) {
        if ($value)
            if (\Hash::needsRehash($value))
                $value = \Hash::make($value);
        $this->attributes['password'] = $value;

    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'last_login_at', 'last_login_ip', 'group_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function logs(){
        return $this->morphMany('Model\Core\Log','loggable');
    }

}
