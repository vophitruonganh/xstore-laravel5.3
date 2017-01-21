<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserShip
 */
class UserShip extends Model
{
    protected $table = 'user_ship';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'ship_id'
    ];

    protected $guarded = [];

        
}