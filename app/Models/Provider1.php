<?php

namespace App\Models;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Provider extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable; 

    protected $fillable = [
        'city_id','country_id','full_name','code','email','mobile','country_code','password','nationality_id','avatar','birthday','gender',
        'remember_token','device_token','suspend','status','country_of_residence','mobile_verified_at'
    ];

    public function userToken()
    {
        return $this->hasOne(UserToken::class,'user_id','provider_id');
    }

}
