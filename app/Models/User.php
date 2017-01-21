<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
 * Class User
 */
class User extends Authenticatable
{
    protected $table = 'users';

    public $timestamps = true;

    protected $fillable = [
        'firstname',
        'lastname',
        'dob',
        'address',
        'district_id',
        'idcard',
        'email',
        'password',
        'phone',
        'sex',
        'status',
        'active',
        'role_id',
        'remember_token'
    ];

    protected $guarded = [];

    public function district(){
        return $this->hasOne(app('district'),'id');
    }

    public function role(){
        return $this->belongsTo(app('role'),'role_id');
    }

}