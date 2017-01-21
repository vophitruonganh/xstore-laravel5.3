<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserRole
 */
class UserRole extends Model
{
    protected $table = 'user_role';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'role_id'
    ];

    protected $guarded = [];

        
}